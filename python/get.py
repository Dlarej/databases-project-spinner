import hdf5_getters as h
import MySQLdb
import os


db = MySQLdb.connect(host="localhost",user="root",passwd="password",db="FinalProject")
db.query("DELETE FROM artist WHERE artist_id = 'a';")
cursor = db.cursor(MySQLdb.cursors.DictCursor)

counter = 0
for subdir, dirs, files in os.walk("data/"):
    for file in files:
        f = os.path.join(subdir, file)
        if ".h5" in f:
            h5 = h.open_h5_file_read(f)
            print ("----------")
            
            ''' Store artist tuples '''
            artist_id = h.get_artist_id(h5,0)
            artist_name = h.get_artist_name(h5,0)
            artist_name = artist_name.replace("'","")
            artist_hottness = str(h.get_artist_hotttnesss(h5,0))
            print artist_hottness
            if artist_hottness == "nan":
                artist_hottness = "0.0"
            artist_familiarity = str(h.get_artist_familiarity(h5,0))
            if artist_familiarity == "nan":
                artist_familiarity = "0.0"
            cursor.execute("SELECT * FROM artist WHERE artist_id = '" + artist_id  + "'")
            rs = cursor.fetchall()
            if cursor.rowcount != 1:
                cursor.execute("INSERT INTO artist VALUES ('" + artist_id + "','" + artist_name  + "'," + artist_hottness + "," + artist_familiarity + ");")
            
            ''' Store artist_genres tuples '''            
            terms = h.get_artist_terms(h5,0)
            mbtags = h.get_artist_mbtags(h5,0)

            for term in terms:
                term = term.replace("'","")
                cursor.execute("SELECT * FROM artist_genres WHERE artist_id='" + artist_id + "' AND genre ='" + term + "'")
                if cursor.rowcount != 1:
                    cursor.execute("INSERT INTO artist_genres VALUES ('" + artist_id + "','" + term + "')")
            for tag in mbtags:
                tag = tag.replace("'","")
                cursor.execute("SELECT * FROM artist_genres WHERE artist_id='" + artist_id + "' AND genre ='" + tag + "'")
                if cursor.rowcount != 1:
                    cursor.execute("INSERT INTO artist_genres VALUES ('" + artist_id + "','" + tag + "')")

            ''' Store track tuples '''

            track_id = h.get_track_id(h5,0)
            track_title = h.get_title(h5,0)
            track_title = track_title.replace("'","")
            track_album = h.get_release(h5,0)
            track_album = track_album.replace("'","")
            track_duration = str(h.get_duration(h5,0))
            track_year = str(h.get_year(h5,0))

            cursor.execute("SELECT * FROM track WHERE track_id = '" + track_id  + "'")
            rs = cursor.fetchall()
            if cursor.rowcount != 1:
                cursor.execute("INSERT INTO track VALUES ('" + track_id + "','" + track_title + "','" + artist_id  + "','"  + artist_name + "','" + track_album + "'," + track_duration + "," + track_year  + ");")
                      
            ''' Store track_analysis tuples '''
            print ("Track ID: " + h.get_track_id(h5,0))
            track_tempo = str(h.get_tempo(h5,0))
            track_key = str(h.get_key(h5,0))
            track_danceability = str(h.get_danceability(h5,0))
            if track_danceability == "nan":
                track_danceability = "0.0"
            track_hottness = str(h.get_song_hotttnesss(h5,0))
            if track_hottness == "nan":
                track_hottness = "0.0"

            cursor.execute("SELECT * FROM track_analysis WHERE track_id = '" + track_id + "'")
            rs = cursor.fetchall()
            if cursor.rowcount != 1:
                cursor.execute("INSERT INTO track_analysis VALUES ('" + track_id + "'," + track_tempo + "," + track_key + "," + track_danceability + "," + track_hottness + ");")

            h5.close()

db.commit()
