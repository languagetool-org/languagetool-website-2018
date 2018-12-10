@extends('layouts.app')

@section('title', 'Link to LanguageTool')

@section('content')
    <div id="textContent" class="content-section">

        <div class="container">

            <h1>Link to LanguageTool</h1>
            
            <p>Add a text with up to 200 characters here. The link below will then point to languagetool.org
            with that text set by default:</p>

            <form>
                <textarea id="textfield" style="width:500px" maxlength="200" class="mceNoEditor" ></textarea>
            </form>
            
            Link: <span id="link"></span>
        </div>
        
    </div>

<script>
	$( document ).ready(function() {
		var f = function() {
			//console.log(">"+encodeURI($('#textfield').val()));
			var encodedText = encodeURI($('#textfield').val());
			var link = "https://languagetool.org/?text=" + encodedText;
			$('#link').html("<a href='" + link + "'>" + link + "</a>");
		};
		$('#textfield').change(f);
		$('#textfield').keyup(f);
	});
</script>

@endsection
