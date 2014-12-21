<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Spinner - Find Your Music</title>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/grayscale.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">


</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<script>
window.onload = function() {
    var el = document.getElementById('target');
    el.scrollIntoView(true);
}
</script>

<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
	<div class="navbar-header">
	    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
		<i class="fa fa-bars"></i>
	    </button>
	    <a class="navbar-brand page-scroll" href="#page-top">
		<i class="fa fa-play-circle"></i>  <span class="light">SPINNER</span>
	    </a>
	</div>
	<!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Intro Header -->
<header class="intro">
    <div class="intro-body">
	<div class="container">
	    <div class="row">
		<div class="col-md-10 col-md-offset-1">
		    <h1 class="brand-heading"><i class="fa fa-play-circle"></i>SPINNER</h1>

<!-- 
			<p class="intro-text">Featured Searches</p>
			<ul class="list-inline" id="search-buttons"> 
			<form class="form-search" action="dashboard.php" method="post">
				<li>
				    <button type="button" class="btn btn-default" onclick="">
					TOP 50 
				    </button>
				</li>
				<li>
				    <button type="button" class="btn btn-default" onclick="">
					Electronic Dance Music 
				    </button>
				</li>
			</form>
			</ul>
-->

		    <p class="intro-text">Discover New Music By</p>
		    <ul class="list-inline" id="search-buttons">
			<li>
			  <button type="button" class="btn btn-default" onclick="toggler('artistSearch');">
			      Artist
			  </button>
			</li>
			<li>
			    <button type="button" class="btn btn-default" onclick="toggler('genreSearch');">
				Genre
			    </button>
			</li>
			<li>
			    <button type="button" class="btn btn-default" onclick="toggler('tempoSearch');">
				Tempo Range
			    </button>
			</li>
			<li>
			    <button type="button" class="btn btn-default" onclick="toggler('yearSearch');">
				Year
			    </button>
			</li>
			<li>
			    <button type="button" class="btn btn-default" onclick="toggler('decadeSearch');">
				Decade
			    </button>
			</li>
			<li>
			    <button type="button" class="btn btn-default" onclick="toggler('keySearch');">
				Same Key
			    </button>
			</li>
			<li>
			    <button type="button" class="btn btn-default" onclick="toggler('relatedKeySearch');">
				Related Key
			    </button>
			</li>
			<li>
			    <button type="button" class="btn btn-default" onclick="toggler('mashSearch');">
				Mashup
			    </button>
			</li>
		</ul><br/>


    <form class="form-search" action="dashboard.php" method="post">
	<div id="artistSearch">
            <input class="search-bar" type="text" placeholder="Search by Artist" name="artist"> <br/><br/>
            <input type="hidden" name="type" value="ArtistSong">
            <button class="btn btn-default page-scroll" type="submit" value="See Songs" />
                <i class="glyphicon glyphicon-search"></i>
            </button>
	</div>
    </form>
    <form class="form-search" action="dashboard.php" method="post">
	<div id="genreSearch">
            <input class="search-bar" type="text" placeholder="Search by Genre" name="genre"> <br/><br/>
            <input type="hidden" name="type" value="SongOfGenre">
            <button class="btn btn-default page-scroll" type="submit" value="See Songs" />
                <i class="glyphicon glyphicon-search"></i>
            </button>

        </div>
    </form>
    <form class="form-search" action="dashboard.php" method="post">
	<div id="yearSearch">
            <input class="search-bar" type="text" placeholder="Search by Year" name="year"> <br/><br/>
            <input type="hidden" name="type" value="SongFromYear">
            <button class="btn btn-default page-scroll" type="submit" value="See Songs" />
                <i class="glyphicon glyphicon-search"></i>
            </button>
	</div>
    </form>

    <form class="form-search" action="dashboard.php" method="post">
	<div id="decadeSearch">
            <input class="search-bar" type="text" placeholder="Search by Decade" name="decade"> <br/><br/>
            <input type="hidden" name="type" value="SongFromDecade">
            <button class="btn btn-default page-scroll" type="submit" value="See Songs" />
                <i class="glyphicon glyphicon-search"></i>
            </button>
	</div>
    </form>

    <form class="form-search" action="dashboard.php" method="post">
	<div id="keySearch">
            <input class="search-bar" type="text" placeholder="Search by Key" name="tonality"> <br/><br/>
            <input type="hidden" name="type" value="SongWithKey">
            <button class="btn btn-default page-scroll" type="submit" value="See Songs" />
                <i class="glyphicon glyphicon-search"></i>
            </button>
	</div>
    </form>

    <form class="form-search" action="dashboard.php" method="post">
	<div id="relatedKeySearch">
            <input class="search-bar" type="text" placeholder="Search by Related Key" name="approx_tonality"> <br/><br/>
            <input type="hidden" name="type" value="SongCloseToKey">
            <button class="btn btn-default page-scroll" type="submit" value="See Songs" />
                <i class="glyphicon glyphicon-search"></i>
            </button>
	</div>
    </form>
    <form class="form-search" action="dashboard.php" method="post">
	<div id="tempoSearch">
	    <input class="search-bar" type="text" placeholder="min Tempo" name="tempo_lower"> 
            <a>-</a>
	    <input class="search-bar" type="text" placeholder="max Tempo" name="tempo_higher"> 
            <input type="hidden" name="type" value="SongWithinTempoRange">
            <button d="temp-btn" class="btn btn-default page-scroll" type="submit">
                <i class="glyphicon glyphicon-search"></i>
            </button>
	</div>
    </form>

    <form class="form-search" action="dashboard.php" method="post">
	<div id="mashSearch">
	    <input class="search-bar" type="text" placeholder="Mashup Tempo" name="mashup_tempo"> 
	    <input class="search-bar" type="text" placeholder="Mashup Key" name="mashup_tonality"> 
            <input type="hidden" name="type" value="MashupSong">
            <button d="temp-btn" class="btn btn-default page-scroll" type="submit">
                <i class="glyphicon glyphicon-search"></i>
            </button>
	</div>
    </form>
<a href="#about" class="btn btn-circle page-scroll">
    <i class="fa fa-angle-double-down animated"></i>
</a>
</div>
</div>
</div>
</div>
</header>

<!-- About Section -->
<section id="about" class="container content-section text-center">
<div class="row">
<div class="col-lg-8 col-lg-offset-2">
    <h2>Results</h2>
 
<?php
    include 'config.php';
    include 'open.php';


    $input_type = $_POST["type"];

    if ($input_type == "ArtistSong") {
        // read the artist name
        $artist = $_POST["artist"];

        // Create and execute the query
        $sql    = 'call ArtistSong(\'' . $artist . '\')';
        $result = mysql_query($sql, $conn);

        // check if the query successfully executed
        if (!$result) {
            echo "DB Error, could not query the database. :-( <br/>";
            echo 'MySQL Error: ' . mysql_error() . '<br/>';
            exit;
        }

        // show results
        echo '<h3>Songs with artist = ' . $artist . ' </h3>';

        echo '<table class="table" data-toggle="table">';
        echo '<thead> <tr> <th>Track</th> <th>Artist</th> <th>Album</th> <th>Duration (s)</th> <th> Year</th>';
	echo '</tr></thead>';
	echo '<tbody>';
        while ($row = mysql_fetch_assoc($result)) {
            echo '<tr>' ;
            echo '<td>' . $row['title'] .  '</td>' ;
            echo '<td>' . $row['artist_name'] .  '</td>' ;
            echo '<td>' . $row['album'] .  '</td>' ;
            echo '<td>' . $row['duration'] .  '</td>' ;
            echo '<td>' . $row['year'] .  '</td>' ;
            echo '</tr>';
        }
	echo '</tbody>';
        echo '</table>';
    } else if($input_type == "SongFromYear") {
        // read the year
        $year = $_POST["year"];

        // Create and execute the query
        $sql    = 'call SongFromYear(\'' . $year . '\')';
        $result = mysql_query($sql, $conn);

        // check if the query successfully executed
        if (!$result) {
            echo "DB Error, could not query the database. :-( <br/>";
            echo 'MySQL Error: ' . mysql_error() . '<br/>';
            exit;
        }

        // show results
        echo '<h3>Songs from year = ' . $year . ' </h3>';

        echo '<table class="table" data-toggle="table">';
        echo '<thead> <tr> <th>Track</th> <th>Artist</th> <th>Album</th> <th>Duration (s)</th> <th> Year</th>';
	echo '</tr></thead>';
	echo '<tbody>';
        while ($row = mysql_fetch_assoc($result)) {
            echo '<tr>' ;
            echo '<td>' . $row['title'] .  '</td>' ;
            echo '<td>' . $row['artist_name'] .  '</td>' ;
            echo '<td>' . $row['album'] .  '</td>' ;
            echo '<td>' . $row['duration'] .  '</td>' ;
            echo '<td>' . $row['year'] .  '</td>' ;
            echo '</tr>';
        }
	echo '</tbody>';
        echo '</table>';
    } else if($input_type == "SongFromDecade") {
        // read the decade
        $decade = $_POST["decade"];

        // Create and execute the query
        $sql    = 'call SongFromDecade(\'' . $decade . '\')';
        $result = mysql_query($sql, $conn);

        // check if the query successfully executed
        if (!$result) {
            echo "DB Error, could not query the database. :-( <br/>";
            echo 'MySQL Error: ' . mysql_error() . '<br/>';
            exit;
        }

        // show results
        echo '<h3>Songs from decade = ' . $decade . ' </h3>';
        echo '<table class="table" data-toggle="table">';
        echo '<thead> <tr> <th>Track</th> <th>Artist</th> <th>Album</th> <th>Duration (s)</th> <th> Year</th>';
        echo '</tr></thead>';
        echo '<tbody>';
        while ($row = mysql_fetch_assoc($result)) {
            echo '<tr>' ;
            echo '<td>' . $row['title'] .  '</td>' ;
            echo '<td>' . $row['artist_name'] .  '</td>' ;
            echo '<td>' . $row['album'] .  '</td>' ;
            echo '<td>' . $row['duration'] .  '</td>' ;
            echo '<td>' . $row['year'] .  '</td>' ;
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
    } else if($input_type == "SongOfGenre") {
        // read the genre
        $genre = $_POST["genre"];

        // Create and execute the query
        $sql    = 'call SongOfGenre(\'' . $genre . '\')';
        $result = mysql_query($sql, $conn);

        // check if the query successfully executed
        if (!$result) {
            echo "DB Error, could not query the database. :-( <br/>";
            echo 'MySQL Error: ' . mysql_error() . '<br/>';
            exit;
        }

        // show results
        echo '<h3>Songs of genre = ' . $genre . ' </h3>';
        echo '<table class="table" data-toggle="table">';
        echo '<thead> <tr> <th>Track</th> <th>Artist</th> <th>Album</th> <th>Duration (s)</th> <th> Year</th>';
        echo '</tr></thead>';
        echo '<tbody>';
        while ($row = mysql_fetch_assoc($result)) {
            echo '<tr>' ;
            echo '<td>' . $row['title'] .  '</td>' ;
            echo '<td>' . $row['artist_name'] .  '</td>' ;
            echo '<td>' . $row['album'] .  '</td>' ;
            echo '<td>' . $row['duration'] .  '</td>' ;
            echo '<td>' . $row['year'] .  '</td>' ;
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
    } else if($input_type == "SongTop50") {
        // Create and execute the query
        $sql    = 'call SongTop50()';
        $result = mysql_query($sql, $conn);

        // check if the query successfully executed
        if (!$result) {
            echo "DB Error, could not query the database. :-( <br/>";
            echo 'MySQL Error: ' . mysql_error() . '<br/>';
            exit;
        }

        // show results
        echo '<h3>Top 50 songs</h3>';
        echo '<table class="table" data-toggle="table">';
        echo '<thead> <tr> <th>Track</th> <th>Artist</th> <th>Album</th> <th>Duration (s)</th> <th> Year</th>';
            echo '<th>BPM</th>' ;
            echo '<th>Tonality</th>' ;
            echo '<th>Hottness</th>' ;
        echo '</tr></thead>';
        echo '<tbody>';
        while ($row = mysql_fetch_assoc($result)) {
            echo '<tr>' ;
            echo '<td>' . $row['title'] .  '</td>' ;
            echo '<td>' . $row['artist_name'] .  '</td>' ;
            echo '<td>' . $row['album'] .  '</td>' ;
            echo '<td>' . $row['duration'] .  '</td>' ;
            echo '<td>' . $row['year'] .  '</td>' ;
            if (!is_null($row['tempo'])) {
                echo '<td>' . $row['tempo'] .  '</td>' ;
            }
            if (!is_null($row['tonality'])) {
                echo '<td>' . $row['tonality'] .  '</td>' ;
            }
            if (!is_null($row['hottness'])) {
                echo '<td>' . $row['hottness'] .  '</td>' ;
            }
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
    } else if($input_type == "SongWithinTempoRange") {
        // read the upper and lower bounds for tempo
        $lower = $_POST["tempo_lower"];
        $higher = $_POST["tempo_higher"];

        // Create and execute the query
        $sql    = 'call SongWithinTempoRange(' . $lower . ',' . $higher  .')';
        $result = mysql_query($sql, $conn);

        // check if the query successfully executed
        if (!$result) {
            echo "DB Error, could not query the database. :-( <br/>";
            echo 'MySQL Error: ' . mysql_error() . '<br/>';
            exit;
        }

        // show results
        echo '<h3>Songs between tempo = ' . $lower . ' and ' . $higher . ' </h3>';

        echo '<table class="table" data-toggle="table">';
        echo '<thead> <tr> <th>Track</th> <th>Artist</th> <th>Album</th> <th>Duration (s)</th> <th> Year</th>';
            echo '<th>BPM</th>' ;
            echo '<th>Tonality</th>' ;
            echo '<th>Hottness</th>' ;
        echo '</tr></thead>';
        echo '<tbody>';
        while ($row = mysql_fetch_assoc($result)) {
            echo '<tr>' ;
            echo '<td>' . $row['title'] .  '</td>' ;
            echo '<td>' . $row['artist_name'] .  '</td>' ;
            echo '<td>' . $row['album'] .  '</td>' ;
            echo '<td>' . $row['duration'] .  '</td>' ;
            echo '<td>' . $row['year'] .  '</td>' ;
            if (!is_null($row['tempo'])) {
                echo '<td>' . $row['tempo'] .  '</td>' ;
            }
            if (!is_null($row['tonality'])) {
                echo '<td>' . $row['tonality'] .  '</td>' ;
            }
            if (!is_null($row['hottness'])) {
                echo '<td>' . $row['hottness'] .  '</td>' ;
            }
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
    } else if($input_type == "CloseToTempo") {
        // read the tempo
        $tempo = $_POST["tempo"];

        // Create and execute the query
        $sql    = 'call CloseToTempo(' . $tempo . ')';
        $result = mysql_query($sql, $conn);

        // check if the query successfully executed
        if (!$result) {
            echo "DB Error, could not query the database. :-( <br/>";
            echo 'MySQL Error: ' . mysql_error() . '<br/>';
            exit;
        }

        // show results
        echo '<h3>Songs close to tempo = ' . $tempo . '</h3>';

        echo '<table class="table" data-toggle="table">';
        echo '<thead> <tr> <th>Track</th> <th>Artist</th> <th>Album</th> <th>Duration (s)</th> <th> Year</th>';
            echo '<th>BPM</th>' ;
            echo '<th>Tonality</th>' ;
            echo '<th>Hottness</th>' ;
        echo '</tr></thead>';
        echo '<tbody>';
        while ($row = mysql_fetch_assoc($result)) {
            echo '<tr>' ;
            echo '<td>' . $row['title'] .  '</td>' ;
            echo '<td>' . $row['artist_name'] .  '</td>' ;
            echo '<td>' . $row['album'] .  '</td>' ;
            echo '<td>' . $row['duration'] .  '</td>' ;
            echo '<td>' . $row['year'] .  '</td>' ;
            if (!is_null($row['tempo'])) {
                echo '<td>' . $row['tempo'] .  '</td>' ;
            }
            if (!is_null($row['tonality'])) {
                echo '<td>' . $row['tonality'] .  '</td>' ;
            }
            if (!is_null($row['hottness'])) {
                echo '<td>' . $row['hottness'] .  '</td>' ;
            }
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
    } else if($input_type == "SongWithKey") {
        // read the tonality
        $tonality = $_POST["tonality"];

        // Create and execute the query
        $sql    = 'call SongWithKey(' . $tonality . ')';
        $result = mysql_query($sql, $conn);

        // check if the query successfully executed
        if (!$result) {
            echo "DB Error, could not query the database. :-( <br/>";
            echo 'MySQL Error: ' . mysql_error() . '<br/>';
            exit;
        }

        // show results
        echo '<h3>Songs in key of ' . $tonality . '</h3>';

        echo '<table class="table" data-toggle="table">';
        echo '<thead> <tr> <th>Track</th> <th>Artist</th> <th>Album</th> <th>Duration (s)</th> <th> Year</th>';
            echo '<th>BPM</th>' ;
            echo '<th>Tonality</th>' ;
            echo '<th>Hottness</th>' ;
        echo '</tr></thead>';
        echo '<tbody>';
        while ($row = mysql_fetch_assoc($result)) {
            echo '<tr>' ;
            echo '<td>' . $row['title'] .  '</td>' ;
            echo '<td>' . $row['artist_name'] .  '</td>' ;
            echo '<td>' . $row['album'] .  '</td>' ;
            echo '<td>' . $row['duration'] .  '</td>' ;
            echo '<td>' . $row['year'] .  '</td>' ;
            if (!is_null($row['tempo'])) {
                echo '<td>' . $row['tempo'] .  '</td>' ;
            }
            if (!is_null($row['tonality'])) {
                echo '<td>' . $row['tonality'] .  '</td>' ;
            }
            if (!is_null($row['hottness'])) {
                echo '<td>' . $row['hottness'] .  '</td>' ;
            }
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
    } else if($input_type == "SongCloseToKey") {
        // read the tonality
        $approx_tonality = $_POST["approx_tonality"];

        // Create and execute the query
        $sql    = 'call SongCloseToKey(' . $approx_tonality . ')';
        $result = mysql_query($sql, $conn);

        // check if the query successfully executed
        if (!$result) {
            echo "DB Error, could not query the database. :-( <br/>";
            echo 'MySQL Error: ' . mysql_error() . '<br/>';
            exit;
        }

        // show results
        echo '<h3>Songs close to key of ' . $approx_tonality . '</h3>';

        echo '<table class="table" data-toggle="table">';
        echo '<thead> <tr> <th>Track</th> <th>Artist</th> <th>Album</th> <th>Duration (s)</th> <th> Year</th>';
            echo '<th>BPM</th>' ;
            echo '<th>Tonality</th>' ;
            echo '<th>Hottness</th>' ;
        echo '</tr></thead>';
        echo '<tbody>';
        while ($row = mysql_fetch_assoc($result)) {
            echo '<tr>' ;
            echo '<td>' . $row['title'] .  '</td>' ;
            echo '<td>' . $row['artist_name'] .  '</td>' ;
            echo '<td>' . $row['album'] .  '</td>' ;
            echo '<td>' . $row['duration'] .  '</td>' ;
            echo '<td>' . $row['year'] .  '</td>' ;
            if (!is_null($row['tempo'])) {
                echo '<td>' . $row['tempo'] .  '</td>' ;
            }
            if (!is_null($row['tonality'])) {
                echo '<td>' . $row['tonality'] .  '</td>' ;
            }
            if (!is_null($row['hottness'])) {
                echo '<td>' . $row['hottness'] .  '</td>' ;
            }
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
    } else if($input_type == "ElectronicDance") {
        // Create and execute the query
        $sql    = 'call ElectronicDance()';
        $result = mysql_query($sql, $conn);

        // check if the query successfully executed
        if (!$result) {
            echo "DB Error, could not query the database. :-( <br/>";
            echo 'MySQL Error: ' . mysql_error() . '<br/>';
            exit;
        }

        // show results
        echo '<h3>Electronic Dance Songs</h3>';

        echo '<table class="table" data-toggle="table">';
        echo '<thead> <tr> <th>Track</th> <th>Artist</th> <th>Album</th> <th>Duration (s)</th> <th> Year</th>';
            echo '<th>BPM</th>' ;
            echo '<th>Tonality</th>' ;
            echo '<th>Hottness</th>' ;
        echo '</tr></thead>';
        echo '<tbody>';
        while ($row = mysql_fetch_assoc($result)) {
            echo '<tr>' ;
            echo '<td>' . $row['title'] .  '</td>' ;
            echo '<td>' . $row['artist_name'] .  '</td>' ;
            echo '<td>' . $row['album'] .  '</td>' ;
            echo '<td>' . $row['duration'] .  '</td>' ;
            echo '<td>' . $row['year'] .  '</td>' ;
            if (!is_null($row['tempo'])) {
                echo '<td>' . $row['tempo'] .  '</td>' ;
            }
            if (!is_null($row['tonality'])) {
                echo '<td>' . $row['tonality'] .  '</td>' ;
            }
            if (!is_null($row['hottness'])) {
                echo '<td>' . $row['hottness'] .  '</td>' ;
            }
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
    } else if($input_type == "MashupSong") {
        // read the tonality and tempo
        $mashup_tempo = $_POST["mashup_tempo"];
        $mashup_tonality = $_POST["mashup_tonality"];

        // Create and execute the query
        $sql    = 'call MashupSong(' . $mashup_tempo . ', ' . $mashup_tonality . ')';
        $result = mysql_query($sql, $conn);

        // check if the query successfully executed
        if (!$result) {
            echo "DB Error, could not query the database. :-( <br/>";
            echo 'MySQL Error: ' . mysql_error() . '<br/>';
            exit;
        }

        // show results
        echo '<h3>Songs that would be good mashups with approx tempo ' . $mashup_tempo . ', and approx key: ' . $mashup_tonality . '</h3>';

        echo '<table class="table" data-toggle="table">';
        echo '<thead> <tr> <th>Track</th> <th>Artist</th> <th>Album</th> <th>Duration (s)</th> <th> Year</th>';
            echo '<th>BPM</th>' ;
            echo '<th>Tonality</th>' ;
            echo '<th>Hottness</th>' ;
        echo '</tr></thead>';
        echo '<tbody>';
        while ($row = mysql_fetch_assoc($result)) {
            echo '<tr>' ;
            echo '<td>' . $row['title'] .  '</td>' ;
            echo '<td>' . $row['artist_name'] .  '</td>' ;
            echo '<td>' . $row['album'] .  '</td>' ;
            echo '<td>' . $row['duration'] .  '</td>' ;
            echo '<td>' . $row['year'] .  '</td>' ;
            if (!is_null($row['tempo'])) {
                echo '<td>' . $row['tempo'] .  '</td>' ;
            }
            if (!is_null($row['tonality'])) {
                echo '<td>' . $row['tonality'] .  '</td>' ;
            }
            if (!is_null($row['hottness'])) {
                echo '<td>' . $row['hottness'] .  '</td>' ;
            }
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
    }

    // flush
    mysql_free_result($result);

?>

   
</div>
</div>
</section>




<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="js/jquery.easing.min.js"></script>

<!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

<!-- Custom Theme JavaScript -->
<script src="js/grayscale.js"></script>

</html>

</body>
