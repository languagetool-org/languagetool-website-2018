@extends('voyager::master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ voyager_asset('css/ga-embed.css') }}">
@stop

@section('content')
    <div class="page-content">
        @include('voyager::alerts')
        @include('voyager::dimmers')
        <div style="padding:15px;">
            <?php $google_analytics_client_id = Voyager::setting("google_analytics_client_id"); ?>

                <?php
                use App\ExampleError;
                use App\Correction;
                use App\FalseAlarm;
                use App\IgnoreRule;
                use App\IgnoreWord;
                use App\User;
                use App\NewSubscription;
                ?>
                
                <table>
                    <tr>
                        <td>Total users</td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td><?= User::count(); ?></td>
                    </tr>
                    <tr>
                        <td>Premium users</td>
                        <td></td>
                        <td><?= User::where('has_premium', true)->count(); ?></td>
                    </tr>
                    <tr>
                        <td>Active premium users</td>
                        <td></td>
                        <td>
                            <?php /* checking has_premium is not enough, we use it to provide free access to employees etc */?>
                            <?= User::whereNotNull('premium_from')->orWhere(function($q) {
                                $q->where('premium_to', '>=', date("Y-m-d"))->whereNull('premium_to');
                            })->count()
                            ?> (including ones still active but who have cancelled on a future date; not counting employees etc)</td>
                    </tr>
                    <tr>
                        <td>Active premium users</td>
                        <td></td>
                        <td><?= User::whereNotNull('premium_from')->whereNull('premium_to')->count(); ?> (only premium users that have not cancelled)</td>
                    </tr>
                    <tr>
                        <td>Sanity check</td>
                        <td></td>
                        <td><?php $premiumUsers = User::whereNotNull('premium_from')
                            ->where('has_premium', '<>', true)
                            ->orWhere(function($q) {
                                $q->where('premium_to', '>=', date("Y-m-d"))->whereNull('premium_to');
                            })->get();
                            foreach ($premiumUsers as $premiumUser) {
                                echo $premiumUser->email.", ";
                            }
                        ?> (should be empty: users with premium date but no 'has_premium' flag)</td>
                    </tr>
                    <tr>
                        <td>Sanity check (subscription)</td>
                        <td></td>
                        <td><?= NewSubscription::whereNotIn('subscription_months', [1, 3, 12])->count(); ?>
                          (should be 0: users with new_subscription != 1, 3, 12)</td>
                    </tr>
                    <tr>
                        <td valign="top">Affiliate users</td>
                        <td></td>
                        <td><?php
                            $affiliates = DB::table('users')
                                ->select('affiliate', DB::raw('count(*) as total'))
                                ->groupBy('affiliate')
                                ->get();
                            foreach ($affiliates as $a) {
                                if ($a->affiliate) {
                                    echo "$a->affiliate: $a->total<br>";
                                }
                            }
                        ?></td>
                    </tr>
                    <tr>
                        <td style="height:3px"></td>
                    </tr>
                    <tr>
                        <?php
                        $thisMonth = date("Y-m-01", time());
                        $thisMonthEnd = date("Y-m-31", time());
                        ?>
                        <td valign="top" bgcolor="#eee">Aff. premium users<br><?= $thisMonth ?> to <?= $thisMonthEnd ?></td>
                        <td bgcolor="#eee"></td>
                        <td bgcolor="#eee"bgcolor="#eee"><?php
                            $affiliates = DB::table('users')
                                ->select('affiliate', 'subscription_months', DB::raw('count(*) as total'))
                                ->where('has_premium', 1)
                                ->where('premium_from', '>=', $thisMonth)
                                ->where('premium_from', '<=', $thisMonthEnd)
                                ->groupBy('affiliate', 'subscription_months')
                                ->get();
                            foreach ($affiliates as $a) {
                                if ($a->affiliate) {
                                    echo "$a->affiliate, $a->subscription_months months: $a->total<br>";
                                }
                            }
                        ?></td>
                    </tr>
                    <tr>
                        <td style="height:3px"></td>
                    </tr>
                    <tr>
                        <?php
                        $lastMonth = date("Y-m-01", strtotime('-1 month', time()));
                        $lastMonthEnd = date("Y-m-31", strtotime('-1 month', time()));
                        ?>
                        <td valign="top" bgcolor="#eee">Aff. premium users<br><?= $lastMonth ?> to <?= $lastMonthEnd ?></td>
                        <td bgcolor="#eee"></td>
                        <td bgcolor="#eee"bgcolor="#eee"><?php
                            $affiliates = DB::table('users')
                                ->select('affiliate', 'subscription_months', DB::raw('count(*) as total'))
                                ->where('has_premium', 1)
                                ->where('premium_from', '>=', $lastMonth)
                                ->where('premium_from', '<=', $lastMonthEnd)
                                ->groupBy('affiliate', 'subscription_months')
                                ->get();
                            foreach ($affiliates as $a) {
                                if ($a->affiliate) {
                                    echo "$a->affiliate, $a->subscription_months months: $a->total<br>";
                                }
                            }
                        ?></td>
                    </tr>

                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Total ignored words</td>
                        <td></td>
                        <td><?= IgnoreWord::count(); ?></td>
                    </tr>
                    <tr>
                        <td>Users with ignored words</td>
                        <td></td>
                        <td><?= IgnoreWord::all()->groupBy('user_id')->map(function($x) { return sizeof($x); })->count(); ?></td>
                    </tr>
                    <tr>
                        <td>Users with >= 5 ignored words</td>
                        <td></td>
                        <td><?= IgnoreWord::all()->groupBy('user_id')->map(function($x) { return sizeof($x); })->filter( function($x) { return $x >= 5; } )->count(); ?></td>
                    </tr>
                    <tr>
                        <td>Newly ignored words in last 24 hours</td>
                        <td></td>
                        <td><?= IgnoreWord::where('created_at', '>=', date("Y-m-d H:i:s", strtotime('-24 hours', time())))->count(); ?></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Error examples (add-on)</td>
                        <td></td>
                        <td><?= ExampleError::count(); ?></td>
                    </tr>
                    <tr>
                        <td>Users contributing examples</td>
                        <td></td>
                        <td><?= ExampleError::all()->unique('user_id')->count(); ?></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Corrections (lt.org)</td>
                        <td></td>
                        <td><?= Correction::count(); ?></td>
                    </tr>
                    <tr>
                        <td>Corrections (lt.org, de-DE)</td>
                        <td></td>
                        <td><?= Correction::where("language", "=", "de-DE")->count(); ?></td>
                    </tr>
                    <tr>
                        <td>Corrections (lt.org, en-US)</td>
                        <td></td>
                        <td><?= Correction::where("language", "=", "en-US")->count(); ?></td>
                    </tr>
                    <tr>
                        <td>Corrections (lt.org, last 24h)</td>
                        <td></td>
                        <td><?= Correction::where('created_at', '>=', date("Y-m-d H:i:s", strtotime('-24 hours', time())))->count(); ?></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Reported false alarms (lt.org)</td>
                        <td></td>
                        <td><?= FalseAlarm::count(); ?></td>
                    </tr>
                    <tr>
                        <td>Reported false alarms (lt.org, last 24 hours):</td>
                        <td></td>
                        <td><?= FalseAlarm::where('created_at', '>=', date("Y-m-d H:i:s", strtotime('-24 hours', time())))->count(); ?></td>
                    </tr>
                    <tr>
                        <td>Total "ignore rule" events (lt.org)</td>
                        <td></td>
                        <td><?= IgnoreRule::count(); ?></td>
                    </tr>
                    <!--
                    <tr>
                        <td>Premium users</td>
                        <td></td>
                        <td>
                            <?php $premiumUsers = User::all()->where('has_premium', true)->map(function($x) { return $x; });
                                foreach ($premiumUsers as $premiumUser) {
                                    echo $premiumUser->email.", ";
                                }
                                ?>
                        </td>
                    </tr>
                    -->
                </table>
                
            <div class="Dashboard Dashboard--full" id="analytics-dashboard">
                <header class="Dashboard-header">
                    <ul class="FlexGrid">
                        <li class="FlexGrid-item">
                            <div class="Titles">
                                <h1 class="Titles-main" id="view-name">Select a View</h1>
                                <div class="Titles-sub">Various visualizations</div>
                            </div>
                        </li>
                        <li class="FlexGrid-item FlexGrid-item--fixed">
                            <div id="active-users-container"></div>
                        </li>
                    </ul>
                    <div id="view-selector-container"></div>
                </header>

                <ul class="FlexGrid FlexGrid--halves">
                    <li class="FlexGrid-item">
                        <div class="Chartjs">
                            <header class="Titles">
                                <h1 class="Titles-main">This Week vs Last Week</h1>
                                <div class="Titles-sub">By users</div>
                            </header>
                            <figure class="Chartjs-figure" id="chart-1-container"></figure>
                            <ol class="Chartjs-legend" id="legend-1-container"></ol>
                        </div>
                    </li>
                    <li class="FlexGrid-item">
                        <div class="Chartjs">
                            <header class="Titles">
                                <h1 class="Titles-main">This Year vs Last Year</h1>
                                <div class="Titles-sub">By users</div>
                            </header>
                            <figure class="Chartjs-figure" id="chart-2-container"></figure>
                            <ol class="Chartjs-legend" id="legend-2-container"></ol>
                        </div>
                    </li>
                    <li class="FlexGrid-item">
                        <div class="Chartjs">
                            <header class="Titles">
                                <h1 class="Titles-main">Top Browsers</h1>
                                <div class="Titles-sub">By pageview</div>
                            </header>
                            <figure class="Chartjs-figure" id="chart-3-container"></figure>
                            <ol class="Chartjs-legend" id="legend-3-container"></ol>
                        </div>
                    </li>
                    <li class="FlexGrid-item">
                        <div class="Chartjs">
                            <header class="Titles">
                                <h1 class="Titles-main">Top Countries</h1>
                                <div class="Titles-sub">By sessions</div>
                            </header>
                            <figure class="Chartjs-figure" id="chart-4-container"></figure>
                            <ol class="Chartjs-legend" id="legend-4-container"></ol>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@stop

@section('javascript')

    @if(isset($google_analytics_client_id) && !empty($google_analytics_client_id))
        <script>
            (function (w, d, s, g, js, fs) {
                g = w.gapi || (w.gapi = {});
                g.analytics = {
                    q: [], ready: function (f) {
                        this.q.push(f);
                    }
                };
                js = d.createElement(s);
                fs = d.getElementsByTagName(s)[0];
                js.src = 'https://apis.google.com/js/platform.js';
                fs.parentNode.insertBefore(js, fs);
                js.onload = function () {
                    g.load('analytics');
                };
            }(window, document, 'script'));
        </script>

        <script src="{{ voyager_asset('js/ga-embed/chart.min.js') }}"></script>
        <script src="{{ voyager_asset('js/ga-embed/moment.min.js') }}"></script>
        <!-- Include the ViewSelector2 component script. -->
        <script src="{{ voyager_asset('js/ga-embed/view-selector2.js') }}"></script>
        <!-- Include the DateRangeSelector component script. -->
        <script src="{{ voyager_asset('js/ga-embed/date-range-selector.js') }}"></script>
        <!-- Include the ActiveUsers component script. -->
        <script src="{{ voyager_asset('js/ga-embed/active-users.js') }}"></script>

        <script>
            // == NOTE ==
            // This code uses ES6 promises. If you want to use this code in a browser
            // that doesn't supporting promises natively, you'll have to include a polyfill.

            gapi.analytics.ready(function () {

                /**
                 * Authorize the user immediately if the user has already granted access.
                 * If no access has been created, render an authorize button inside the
                 * element with the ID "embed-api-auth-container".
                 */
                gapi.analytics.auth.authorize({
                    container: 'embed-api-auth-container',
                    clientid: '{{ $google_analytics_client_id }}'
                });


                /**
                 * Create a new ActiveUsers instance to be rendered inside of an
                 * element with the id "active-users-container" and poll for changes every
                 * five seconds.
                 */
                var activeUsers = new gapi.analytics.ext.ActiveUsers({
                    container: 'active-users-container',
                    pollingInterval: 5
                });


                /**
                 * Add CSS animation to visually show the when users come and go.
                 */
                activeUsers.once('success', function () {
                    var element = this.container.firstChild;
                    var timeout;

                    document.getElementById('embed-api-auth-container').style.display = 'none';
                    document.getElementById('analytics-dashboard').style.display = 'block';

                    this.on('change', function (data) {
                        var element = this.container.firstChild;
                        var animationClass = data.delta > 0 ? 'is-increasing' : 'is-decreasing';
                        element.className += (' ' + animationClass);

                        clearTimeout(timeout);
                        timeout = setTimeout(function () {
                            element.className =
                                    element.className.replace(/ is-(increasing|decreasing)/g, '');
                        }, 3000);
                    });
                });


                /**
                 * Create a new ViewSelector2 instance to be rendered inside of an
                 * element with the id "view-selector-container".
                 */
                var viewSelector = new gapi.analytics.ext.ViewSelector2({
                    container: 'view-selector-container'
                })
                        .execute();


                /**
                 * Update the activeUsers component, the Chartjs charts, and the dashboard
                 * title whenever the user changes the view.
                 */
                viewSelector.on('viewChange', function (data) {
                    var title = document.getElementById('view-name');
                    if (title) {
                        title.innerHTML = data.property.name + ' (' + data.view.name + ')';
                    }

                    // Start tracking active users for this view.
                    activeUsers.set(data).execute();

                    // Render all the of charts for this view.
                    renderWeekOverWeekChart(data.ids);
                    renderYearOverYearChart(data.ids);
                    renderTopBrowsersChart(data.ids);
                    renderTopCountriesChart(data.ids);
                });


                /**
                 * Draw the a chart.js line chart with data from the specified view that
                 * overlays session data for the current week over session data for the
                 * previous week.
                 */
                function renderWeekOverWeekChart(ids) {

                    // Adjust `now` to experiment with different days, for testing only...
                    var now = moment(); // .subtract(3, 'day');

                    var thisWeek = query({
                        'ids': ids,
                        'dimensions': 'ga:date,ga:nthDay',
                        'metrics': 'ga:users',
                        'start-date': moment(now).subtract(1, 'day').day(0).format('YYYY-MM-DD'),
                        'end-date': moment(now).format('YYYY-MM-DD')
                    });

                    var lastWeek = query({
                        'ids': ids,
                        'dimensions': 'ga:date,ga:nthDay',
                        'metrics': 'ga:users',
                        'start-date': moment(now).subtract(1, 'day').day(0).subtract(1, 'week')
                                .format('YYYY-MM-DD'),
                        'end-date': moment(now).subtract(1, 'day').day(6).subtract(1, 'week')
                                .format('YYYY-MM-DD')
                    });

                    Promise.all([thisWeek, lastWeek]).then(function (results) {

                        var data1 = results[0].rows.map(function (row) {
                            return +row[2];
                        });
                        var data2 = results[1].rows.map(function (row) {
                            return +row[2];
                        });
                        var labels = results[1].rows.map(function (row) {
                            return +row[0];
                        });

                        labels = labels.map(function (label) {
                            return moment(label, 'YYYYMMDD').format('ddd');
                        });

                        var data = {
                            labels: labels,
                            datasets: [
                                {
                                    label: 'Last Week',
                                    fillColor: 'rgba(220,220,220,0.5)',
                                    strokeColor: 'rgba(220,220,220,1)',
                                    pointColor: 'rgba(220,220,220,1)',
                                    pointStrokeColor: '#fff',
                                    data: data2
                                },
                                {
                                    label: 'This Week',
                                    fillColor: 'rgba(151,187,205,0.5)',
                                    strokeColor: 'rgba(151,187,205,1)',
                                    pointColor: 'rgba(151,187,205,1)',
                                    pointStrokeColor: '#fff',
                                    data: data1
                                }
                            ]
                        };

                        new Chart(makeCanvas('chart-1-container')).Line(data);
                        generateLegend('legend-1-container', data.datasets);
                    });
                }


                /**
                 * Draw the a chart.js bar chart with data from the specified view that
                 * overlays session data for the current year over session data for the
                 * previous year, grouped by month.
                 */
                function renderYearOverYearChart(ids) {

                    // Adjust `now` to experiment with different days, for testing only...
                    var now = moment(); // .subtract(3, 'day');

                    var thisYear = query({
                        'ids': ids,
                        'dimensions': 'ga:month,ga:nthMonth',
                        'metrics': 'ga:users',
                        'start-date': moment(now).date(1).month(0).format('YYYY-MM-DD'),
                        'end-date': moment(now).format('YYYY-MM-DD')
                    });

                    var lastYear = query({
                        'ids': ids,
                        'dimensions': 'ga:month,ga:nthMonth',
                        'metrics': 'ga:users',
                        'start-date': moment(now).subtract(1, 'year').date(1).month(0)
                                .format('YYYY-MM-DD'),
                        'end-date': moment(now).date(1).month(0).subtract(1, 'day')
                                .format('YYYY-MM-DD')
                    });

                    Promise.all([thisYear, lastYear]).then(function (results) {
                        var data1 = results[0].rows.map(function (row) {
                            return +row[2];
                        });
                        var data2 = results[1].rows.map(function (row) {
                            return +row[2];
                        });
                        var labels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                            'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

                        // Ensure the data arrays are at least as long as the labels array.
                        // Chart.js bar charts don't (yet) accept sparse datasets.
                        for (var i = 0, len = labels.length; i < len; i++) {
                            if (data1[i] === undefined) data1[i] = null;
                            if (data2[i] === undefined) data2[i] = null;
                        }

                        var data = {
                            labels: labels,
                            datasets: [
                                {
                                    label: 'Last Year',
                                    fillColor: 'rgba(220,220,220,0.5)',
                                    strokeColor: 'rgba(220,220,220,1)',
                                    data: data2
                                },
                                {
                                    label: 'This Year',
                                    fillColor: 'rgba(151,187,205,0.5)',
                                    strokeColor: 'rgba(151,187,205,1)',
                                    data: data1
                                }
                            ]
                        };

                        new Chart(makeCanvas('chart-2-container')).Bar(data);
                        generateLegend('legend-2-container', data.datasets);
                    })
                            .catch(function (err) {
                                console.error(err.stack);
                            });
                }


                /**
                 * Draw the a chart.js doughnut chart with data from the specified view that
                 * show the top 5 browsers over the past seven days.
                 */
                function renderTopBrowsersChart(ids) {

                    query({
                        'ids': ids,
                        'dimensions': 'ga:browser',
                        'metrics': 'ga:pageviews',
                        'sort': '-ga:pageviews',
                        'max-results': 5
                    })
                            .then(function (response) {

                                var data = [];
                                var colors = ['#4D5360', '#949FB1', '#D4CCC5', '#E2EAE9', '#F7464A'];

                                response.rows.forEach(function (row, i) {
                                    data.push({value: +row[1], color: colors[i], label: row[0]});
                                });

                                new Chart(makeCanvas('chart-3-container')).Doughnut(data);
                                generateLegend('legend-3-container', data);
                            });
                }


                /**
                 * Draw the a chart.js doughnut chart with data from the specified view that
                 * compares sessions from mobile, desktop, and tablet over the past seven
                 * days.
                 */
                function renderTopCountriesChart(ids) {
                    query({
                        'ids': ids,
                        'dimensions': 'ga:country',
                        'metrics': 'ga:sessions',
                        'sort': '-ga:sessions',
                        'max-results': 5
                    })
                            .then(function (response) {

                                var data = [];
                                var colors = ['#4D5360', '#949FB1', '#D4CCC5', '#E2EAE9', '#F7464A'];

                                response.rows.forEach(function (row, i) {
                                    data.push({
                                        label: row[0],
                                        value: +row[1],
                                        color: colors[i]
                                    });
                                });

                                new Chart(makeCanvas('chart-4-container')).Doughnut(data);
                                generateLegend('legend-4-container', data);
                            });
                }


                /**
                 * Extend the Embed APIs `gapi.analytics.report.Data` component to
                 * return a promise the is fulfilled with the value returned by the API.
                 * @param {Object} params The request parameters.
                 * @return {Promise} A promise.
                 */
                function query(params) {
                    return new Promise(function (resolve, reject) {
                        var data = new gapi.analytics.report.Data({query: params});
                        data.once('success', function (response) {
                            resolve(response);
                        })
                                .once('error', function (response) {
                                    reject(response);
                                })
                                .execute();
                    });
                }


                /**
                 * Create a new canvas inside the specified element. Set it to be the width
                 * and height of its container.
                 * @param {string} id The id attribute of the element to host the canvas.
                 * @return {RenderingContext} The 2D canvas context.
                 */
                function makeCanvas(id) {
                    var container = document.getElementById(id);
                    var canvas = document.createElement('canvas');
                    var ctx = canvas.getContext('2d');

                    container.innerHTML = '';
                    canvas.width = container.offsetWidth;
                    canvas.height = container.offsetHeight;
                    container.appendChild(canvas);

                    return ctx;
                }


                /**
                 * Create a visual legend inside the specified element based off of a
                 * Chart.js dataset.
                 * @param {string} id The id attribute of the element to host the legend.
                 * @param {Array.<Object>} items A list of labels and colors for the legend.
                 */
                function generateLegend(id, items) {
                    var legend = document.getElementById(id);
                    legend.innerHTML = items.map(function (item) {
                        var color = item.color || item.fillColor;
                        var label = item.label;
                        return '<li><i style="background:' + color + '"></i>' + label + '</li>';
                    }).join('');
                }


                // Set some global Chart.js defaults.
                Chart.defaults.global.animationSteps = 60;
                Chart.defaults.global.animationEasing = 'easeInOutQuart';
                Chart.defaults.global.responsive = true;
                Chart.defaults.global.maintainAspectRatio = false;

            });

        </script>
    @endif

@stop
