@extends('layouts.app')

@section('title', 'LanguageTool Newsletter')

@section('content')
    <div id="textContent" class="content-section" style="text-align: left">

        <div class="container">

            <h1>Newsletter</h1>
        
            <p>Subscribe to our newsletter to stay up-to-date on new releases and other major LanguageTool-related events (4-8 messages per year):</p>
        
            <!-- code from newsletter2go: -->
            <script id="n2g_script">
                var config = {
                    "form": {
                        "class": "",
                        "style": ""
                    },
                    "container": {
                        "type": "table",
                        "class": "",
                        "style": "width: 100%; border:0px"
                    },
                    "row": {
                        "type": "tr",
                        "class": "",
                        "style": "border:0px"
                    },
                    "columnLeft": {
                        "type": "td",
                        "class": "",
                        "style": "width: 20%; padding: 10px 5px; border:0px"
                    },
                    "columnRight": {
                        "type": "td",
                        "class": "",
                        "style": "border:0px"
                    },
                    "separator": {
                        "type": "br",
                        "class": "",
                        "style": ""
                    },
                    "input": {
                        "class": "",
                        "style": "padding: 5px 10px; border-radius: 2px; border: 1px solid #d8dee4;"
                    },
                    "button": {
                        "type": "button",
                        "class": "",
                        "id": "",
                        "style": "background-color: #1a36d8; border: none; border-radius: 0px; padding: 10px 20px; color: #ffffff; margin-top: 0px; cursor: pointer;"
                    },
                    "label": {
                        "type": "label",
                        "class": "",
                        "style": "padding-left: 5px"
                    },
                    "loader": {
                        "type": "img",
                        "src": "//www.newsletter2go.com/images/loader.svg",
                        "class": "",
                        "style": "margin: auto; display:block; width: auto;"
                    },
                    "message": {
                        "type": "h2",
                        "class": "",
                        "id": "",
                        "style": "text-align: center;"
                    }
                };
                !function(e,t,n,c,r,a,i){
                    e.Newsletter2GoTrackingObject=r,e[r]=e[r]||function()
                        {(e[r].q=e[r].q||[]).push(arguments)},
                        e[r].l=1*new Date,a=t.createElement(n),i=t.getElementsByTagName(n)[0],a.async=1,a.src=c,i.parentNode.insertBefore(a,i)}(window,document,"script","//static.newsletter2go.com/utils.js","n2g");
                n2g('create', 'uu17lt9z-aoxdi5sn-asm');
                //n2g('subscribe:createForm', config);
            </script>

        </div>
            
    </div>

@endsection
