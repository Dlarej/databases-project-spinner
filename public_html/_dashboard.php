<html> 
<body>
    <!-- Show fancy title --> 
    <h1>Spinner Dashboard</h1>
   
    <form action="dashboard.php" method="post">
        Artist : <input type="text" name="artist"> <br/><br/>
	<input type="hidden" name="type" value="ArtistSong">
        <input type="submit" value="See Songs" />
    </form>

    <form action="dashboard.php" method="post">
        Year : <input type="text" name="year"><br/><br/>
	<input type="hidden" name="type" value="SongFromYear">
        <input type="submit" value="See Songs" />
    </form> 

    <form action="dashboard.php" method="post">
        Decade : <input type="text" name="decade"><br/><br/>
	<input type="hidden" name="type" value="SongFromDecade">
        <input type="submit" value="See Songs" />
    </form>

    <form action="dashboard.php" method="post">
	Genre : <input type="text" name="genre"><br/><br/>
	<input type="hidden" name="type" value="SongOfGenre">
	<input type="submit" value="See Songs">
    </form>

    <form action="dashboard.php" method="post">
	Top 50 Songs: <br/><br/>
	<input type="hidden" name="type" value="SongTop50">
	<input type="submit" value="See Songs">
    </form>

    <form action="dashboard.php" method="post">
	Lower Bound of Tempo: <input type="text" name="tempo_lower"><br/>
	Higher Bound of Tempo: <input type="text" name="tempo_higher"><br/><br/>
 	<input type="hidden" name="type" value="SongWithinTempoRange">
	<input type="submit" value="See Songs">
    </form>

    <form action="dashboard.php" method="post">
	Approximate Tempo: <input type="text" name="tempo"><br/><br/>
 	<input type="hidden" name="type" value="CloseToTempo">
	<input type="submit" value="See Songs">
    </form>

    <form action="dashboard.php" method="post">
        Key (0 for C, 1 for C#,...,11 for B): <input type="text" name="tonality"><br/><br/>
        <input type="hidden" name="type" value="SongWithKey">
        <input type="submit" value="See Songs">
    </form>

    <form action="dashboard.php" method="post">
        Close to Key (0 for C, 1 for C#,...,11 for B): <input type="text" name="approx_tonality"><br/><br/>
        <input type="hidden" name="type" value="SongCloseToKey">
        <input type="submit" value="See Songs">
    </form>

    <form action="dashboard.php" method="post">
        Electronic Dance Music:<br/><br/>
        <input type="hidden" name="type" value="ElectronicDance">
        <input type="submit" value="See Songs">
    </form>

    <form action="dashboard.php" method="post">
        Tempo: <input type="text" name="mashup_tempo"><br/>
	Key: <input type="text" name="mashup_tonality"><br/><br/>
        <input type="hidden" name="type" value="MashupSong">
        <input type="submit" value="See Songs">
    </form>

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
	    
	echo '<table border=1>';
	echo '<tr> <th>Track</th> <th>Artist</th> </tr>';
	while ($row = mysql_fetch_assoc($result)) {
	    echo '<tr>' ;
	    echo '<td>' . $row['title'] .  '</td>' ;
	    echo '<td>' . $row['artist_name'] .  '</td>';
	    echo '</tr>';
	}
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
	    
	echo '<table border=1>';
	echo '<tr> <th>Track</th> <th>Artist</th> </tr>';
	while ($row = mysql_fetch_assoc($result)) {
	    echo '<tr>' ;
	    echo '<td>' . $row['title'] .  '</td>' ;
	    echo '<td>' . $row['artist_name'] .  '</td>';
	    echo '</tr>';
	}
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

        echo '<table border=1>';
        echo '<tr> <th>Track</th> <th>Artist</th> </tr>';
        while ($row = mysql_fetch_assoc($result)) {
            echo '<tr>' ;
            echo '<td>' . $row['title'] .  '</td>' ;
            echo '<td>' . $row['artist_name'] .  '</td>';
            echo '</tr>';
        }
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

        echo '<table border=1>';
        echo '<tr> <th>Track</th> <th>Artist</th> </tr>';
        while ($row = mysql_fetch_assoc($result)) {
            echo '<tr>' ;
            echo '<td>' . $row['title'] .  '</td>' ;
            echo '<td>' . $row['artist_name'] .  '</td>';
            echo '</tr>';
        }
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

        echo '<table border=1>';
        echo '<tr> <th>Track</th> <th>Artist</th> </tr>';
        while ($row = mysql_fetch_assoc($result)) {
            echo '<tr>' ;
            echo '<td>' . $row['title'] .  '</td>' ;
            echo '<td>' . $row['artist_name'] .  '</td>';
            echo '</tr>';
        }
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

        echo '<table border=1>';
        echo '<tr> <th>Track</th> <th>Artist</th> </tr>';
        while ($row = mysql_fetch_assoc($result)) {
            echo '<tr>' ;
            echo '<td>' . $row['title'] .  '</td>' ;
            echo '<td>' . $row['artist_name'] .  '</td>';
            echo '</tr>';
        }
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

        echo '<table border=1>';
        echo '<tr> <th>Track</th> <th>Artist</th> </tr>';
        while ($row = mysql_fetch_assoc($result)) {
            echo '<tr>' ;
            echo '<td>' . $row['title'] .  '</td>' ;
            echo '<td>' . $row['artist_name'] .  '</td>';
            echo '</tr>';
        }
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

        echo '<table border=1>';
        echo '<tr> <th>Track</th> <th>Artist</th> </tr>';
        while ($row = mysql_fetch_assoc($result)) {
            echo '<tr>' ;
            echo '<td>' . $row['title'] .  '</td>' ;
            echo '<td>' . $row['artist_name'] .  '</td>';
            echo '</tr>';
        }
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

        echo '<table border=1>';
        echo '<tr> <th>Track</th> <th>Artist</th> </tr>';
        while ($row = mysql_fetch_assoc($result)) {
            echo '<tr>' ;
            echo '<td>' . $row['title'] .  '</td>' ;
            echo '<td>' . $row['artist_name'] .  '</td>';
            echo '</tr>';
        }
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

        echo '<table border=1>';
        echo '<tr> <th>Track</th> <th>Artist</th> </tr>';
        while ($row = mysql_fetch_assoc($result)) {
            echo '<tr>' ;
            echo '<td>' . $row['title'] .  '</td>' ;
            echo '<td>' . $row['artist_name'] .  '</td>';
            echo '</tr>';
        }
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

        echo '<table border=1>';
        echo '<tr> <th>Track</th> <th>Artist</th> </tr>';
        while ($row = mysql_fetch_assoc($result)) {
            echo '<tr>' ;
            echo '<td>' . $row['title'] .  '</td>' ;
            echo '<td>' . $row['artist_name'] .  '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }

    // flush
    mysql_free_result($result);
        
    ?>
</html> 
</body> 
