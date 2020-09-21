@extends('layouts.app')

@section('title', 'Supported Languages - LanguageTool')

@section('content')
    <div id="textContent" class="content-section">
        <div id="languagesOverview">
            <div class="container">

                <h1>Comparison of LanguageTool Editions</h1>

                <table style="text-align: center">
                    <tr>
                        <th style="width:20%"></th>
                        <th style="width:13%">languagetool.org</th>
                        <th style="width:13%">LT for Firefox</th>
                        <th style="width:13%">LT for Chrome</th>
                        <th style="width:13%">LT for Google Docs</th>
                        <th style="width:13%">LT for LibreOffice / OpenOffice</th>
                        <th style="width:13%">LT stand-alone</th>
                    </tr>
                    <tr>
                        <th>Min. Requirements</th>
                        <td class="cell">any recent browser</td>
                        <td class="cell">Firefox 60</td>
                        <td class="cell">current Chrome</td>
                        <td class="cell">Google Docs</td>
                        <td class="cell">
                            LibreOffice / OpenOffice 4.0 +
                            <a href="https://www.java.com/en/download/">Java 8</a>
                        </td>
                        <td class=cell"><a href="https://www.java.com/en/download/">Java 8</a></td>
                    </tr>
                    <tr>
                        <th>Works offline</th>
                        <td class="cell" colspan="4"><img src='../images/cancel.png' alt='no'><span class="light"><br>no, text sent to languagetool.org<br>over encrypted connection</span></td>
                        <td class="cell" colspan="2"><img src='../images/check2.png' alt='yes'><span class="light"><br>yes, no text sent over the internet</span></td>
                    </tr>
                    <tr>
                        <th>Automatically uses latest error detection rules</th>
                        <td class="cell" colspan="4"><img src='../images/check2.png' alt='yes'></td>
                        <td class="cell" colspan="2"><img src='../images/cancel.png' alt='no'></td>
                    </tr>
                    <tr>
                        <th>Additional homophone rules for English, German, Spanish, French</th>
                        <td class="cell" colspan="4"><img src='../images/check2.png' alt='yes'><br>&nbsp;</td>
                        <td class="cell" colspan="2"><img src='../images/cancel.png' alt='no'><span class="light"><br>only when <a href="http://wiki.languagetool.org/finding-errors-using-n-gram-data">installed manually</a></span></td>
                    </tr>
                    <tr>
                        <th>Even more error detection rules for English, German, French, Dutch, and Spanish</th>
                        <td class="cell" colspan="4"><b>Only when using the Premium version, see <a href="https://languagetoolplus.com/">languagetoolplus.com</a></b></td>
                        <td class="cell" colspan="2"><img src='../images/cancel.png' alt='no'></td>
                    </tr>
                </table>

                <p>
                    <br>
                    Looking for more software that integrates LanguageTool?
                    <a href="http://wiki.languagetool.org/software-that-supports-languagetool-as-a-plug-in-or-add-on">See this list.</a>
                </p>
                
            </div>
                
        </div>
    </div>

@endsection
