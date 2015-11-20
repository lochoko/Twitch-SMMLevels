config.php - Holds information re: how to connect to MySql database.

list.php - Generates a list of levels played on a certain date. EX: list.php?date=2015-11-15

new.php - Adds a level to the queue. EX: new.php?tid=JamCow&gid=1111-2222-3333-4444&chan=JAMCOW

queue.php - Generates a list of the next few levels in the queue. EX: queue.php?c=3 (shows who submitted current level and the next 3 people in queue, intended for the Bot to post in chat.
queue.php?c=total (shows next 5 levels in queue; used by the AIR script)
                                                                      
refresh.php - Shows the next level in the queue. EX: refresh.php?chan=JAMCOW

skip.php - Skips a specific level. EX: skip.php?sid=42  (This number is the ID in MySql)

update.php - Marks the level as played. EX: update.php?id=42 (This number is the ID in MySql)


The channel option in the code is intended if the bot is used in multiple channels. The code will be fixed to ignore the Channel option if not submitted.
