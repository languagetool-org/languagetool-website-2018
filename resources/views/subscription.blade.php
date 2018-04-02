@extends('layouts.app')

@section('title', 'Subscription')

<?php
use Illuminate\Support\Facades\Auth;
?>

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <?php if (app()->getLocale() == "de") { ?>

                    <div class="panel-heading">Premium-Abo aktiviert</div>

                    <div class="panel-body">
                        Vielen Dank, dass Sie sich für die Premiumversion von LanguageTool Plus
                        entschieden haben.

                        <p>
                        <?php if (Auth::guest()) { ?>
                            Wenn Sie bereits auf languagetoolplus.com registriert
                            sind, loggen Sie sich bitte ein. Alle Premium-Features
                            sind dann automatisch für Sie aktiviert. Wenn Sie noch keinen Account haben,
                            registrieren Sie sich bitte mit der gleichen E-Mail-Adresse, die Sie
                            für den Kauf des Premium-Abos benutzt haben.
                        <?php } else { ?>
                            Alle Premium-Features sind jetzt auf der Homepage für Sie aktiviert.
                        <?php } ?>
                        </p>

                        <p>Bei Fragen oder Problemen erreichen Sie uns unter
                        <a href="mailto:support@languagetoolplus.com">support@languagetoolplus.com</a>.</p>
                        
                        <h3><a href="https://languagetoolplus.com">Zur Homepage</a></h3>
                        
                    </div>

                <?php } else { ?>

                    <div class="panel-heading">Premium subscription activated</div>

                    <div class="panel-body">
                        Thanks for choosing the premium subscription of LanguageTool Plus.

                        <p>
                        <?php if (Auth::guest()) { ?>
                            If you have an account already at languagetoolplus.com, please log in
                            now and all premium features will be available for you
                            automatically. If you don't have an account yet, please create one now
                            with the same email address you used for the premium subscription.
                        <?php } else { ?>
                            All premium features have now been activated for you on the homepage. 
                        <?php } ?>
                        </p>

                        <p>If you have questions or experience problems, please contact us at
                        <a href="mailto:support@languagetoolplus.com">support@languagetoolplus.com</a>.</p>

                        <h3><a href="https://languagetoolplus.com">Back to the Homepage</a></h3>

                    </div>

                <?php } ?>
                
            </div>
        </div>
    </div>
</div>
@endsection
