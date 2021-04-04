# xMusic V1.0
Simple persian Music download api based on ( nex1music.ir )

OutPut : json

# Search »
#### GET Request Url: Domain.com/Path/index.php

Parameter | Value
--------- | ----------
action | Search
text | Song Name (farsi)

#### Exmple : Domain.com/index.php?action=search&text=کی فکرشو میکرد

# Download »
#### GET Request Url: Domain.com/Path/index.php

Parameter | Value
--------- | ----------
action | down
id | Music id ( from Search Or NewSongs )

# Song Lyric »
#### GET Request Url: Domain.com/Path/index.php

Parameter | Value
--------- | ----------
action | lyric
id | Music id ( from Search Or NewSongs )

# NewSongs »
#### GET Request Url: Domain.com/Path/index.php


Parameter | Value
--------- | ----------
action | new
