<article class="hreview open special">
    <style>

        .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            width: 40%;
            float: none;
            margin: 0 auto;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        .container {
            padding: 2px 16px;
        }


        #myBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: black;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 4px;
        }

    </style>


    <!--  <button type="button" name="reisen" style="width: 350px" class="btn btn-light">Reisen</button>
      <button type="button" name="fotografieren" style="width: 350px" class="btn btn-light">Fotografieren</button>
      <button type="button" name="zeichnen" style="width: 350px" class="btn btn-light">Zeichnen</button>
  -->

    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <script>
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

    </script>

<div class="container mt-5">
    <h3>2019</h3>
    <div class="card">
        <div class="container">
            <h3><b>Tic Tac Toe JavaFX</b></h3>
	<p><h4>Sprache: </h4> Java </p>
	<p></p>
        </div>
    </div>

    <h3>2018</h3>
    <div class="card">
        <div class="container">
            <h3><b>MyDiary</b></h3>
	<p><h4>Sprache: </h4> Java </p>
            <p><h4>Abstract: </h4><a href="https://drive.google.com/open?id=1fvzFtA4QVrCQtX_NCZ0U0p4B_cf4yetw" target="_blank">MyDiary</a></p>
        </div>
    </div>
    <br>
    <div class="card">
        <div class="container">
            <h3><b>Zeiterfassung BOX65</b></h3>
	<p><h4>Sprache: </h4> HTML, CSS, PHP </p>
            <p><h4>Abstract: </h4><a href="https://drive.google.com/open?id=13s3eX4sLKR3eZAA_UDFtadqLKC82mJ50" target="_blank">Zeiterfassung BOX65</a></p>
        </div>
    </div>

    <br>
    <div class="card">
        <div class="container">
            <h3><b>BadiApp</b></h3>
	<p><h4>Sprache: </h4> Java </p>	
            <p><h4>Abstract: </h4><a href="https://drive.google.com/open?id=1AEEGDDo5i1orDK7gwWuvZJ2EfkBUGZ4r" target="_blank">BadiApp</a></p>
        </div>
    </div>
    <br>
    <div class="card">
        <div class="container">
            <h3><b>Gesundheitswebseite</b></h3>
	<p><h4>Sprache: </h4> HTML, CSS </p>
            <p><h4>Abstract: </h4><a href="https://drive.google.com/open?id=1zre2LKfcAjOzKafAVYnMKuejF21Ocsw7" target="_blank">Gesundheitswebseite</a> <br>
                <h4>Webseitelink: </h4><a href="http://gesundheit.imsbern.ch/" target="_blank">GesundheitsWebseite</a></p>
        </div>
    </div>
    <br>
    <div class="card">
        <div class="container">
            <h3><b>RezeptWebseite</b></h3>
	<p><h4>Sprache: </h4> HTML, CSS, PHP </p>
            <p><h4>Abstract: </h4><a href="https://drive.google.com/open?id=1mIiqEUDCs1NCCuovKfqQTQ8QNrVNXqTu" target="_blank">RezeptWebseite</a></p>
        </div>
    </div>
    </div>
</div>

<br>
    <div class="container mt-5">

    <h2>2017</h2>
     <br>
     <div class="card">
         <div class="container">
             <h3><b>TicTacToc</b></h3>
	<p><h4>Sprache: </h4> Javascript </p>
             <p> </p>
         </div>
     </div>
    </div>

</article>
