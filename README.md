# xMusic V1.0
Simple persian Music download api based on ( nex1music.ir )

OutPut : json

# Search »
#### GET Request Url: Domain.com/Path/index.php

Parameter | Value
--------- | ----------
action | Search
text | Song Name (farsi)

#### Exmple : Domain.com/index.php?action=search&text=پایان

# Download »
#### GET Request Url: Domain.com/Path/index.php

Parameter | Value
--------- | ----------
action | down
id | Music id ( from Search Or NewSongs )

#### Exmple : Domain.com/index.php?action=down&id=11728

# Song Lyric »
#### GET Request Url: Domain.com/Path/index.php

Parameter | Value
--------- | ----------
action | lyric
id | Music id ( from Search Or NewSongs )

#### Exmple : Domain.com/index.php?action=lyric&id=11728


# NewSongs »
#### GET Request Url: Domain.com/Path/index.php


Parameter | Value
--------- | ----------
action | new

#### Exmple : Domain.com/index.php?action=new
