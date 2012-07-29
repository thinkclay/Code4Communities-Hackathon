<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-28 15:12:47 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'pagination' at 'MODPATH/pagination' ~ SYSPATH/classes/kohana/core.php [ 542 ]
2012-07-28 15:12:47 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'pagination' at 'MODPATH/pagination' ~ SYSPATH/classes/kohana/core.php [ 542 ]
--
#0 /Users/clay/Sites/Hackathon/application/bootstrap.php(104): Kohana_Core::modules(Array)
#1 /Users/clay/Sites/Hackathon/index.php(97): require('/Users/clay/Sit...')
#2 {main}
2012-07-28 15:12:48 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'pagination' at 'MODPATH/pagination' ~ SYSPATH/classes/kohana/core.php [ 542 ]
2012-07-28 15:12:48 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'pagination' at 'MODPATH/pagination' ~ SYSPATH/classes/kohana/core.php [ 542 ]
--
#0 /Users/clay/Sites/Hackathon/application/bootstrap.php(104): Kohana_Core::modules(Array)
#1 /Users/clay/Sites/Hackathon/index.php(97): require('/Users/clay/Sit...')
#2 {main}
2012-07-28 15:12:49 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'pagination' at 'MODPATH/pagination' ~ SYSPATH/classes/kohana/core.php [ 542 ]
2012-07-28 15:12:49 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'pagination' at 'MODPATH/pagination' ~ SYSPATH/classes/kohana/core.php [ 542 ]
--
#0 /Users/clay/Sites/Hackathon/application/bootstrap.php(104): Kohana_Core::modules(Array)
#1 /Users/clay/Sites/Hackathon/index.php(97): require('/Users/clay/Sit...')
#2 {main}
2012-07-28 15:13:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-28 15:13:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/clay/Sites/Hackathon/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#3 {main}
2012-07-28 15:13:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:13:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:13:19 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Premature end of data (mysqlnd_wireprotocol.c:553) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-07-28 15:13:19 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Premature end of data (mysqlnd_wireprotocol.c:553) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Users/clay/Sites/Hackathon/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Users/clay/Sites/Hackathon/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `offense...', false, Array)
#2 /Users/clay/Sites/Hackathon/application/classes/controller/public/test.php(9): Kohana_Database_Query->execute()
#3 [internal function]: Controller_Public_Test->action_index()
#4 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Test))
#5 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/clay/Sites/Hackathon/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#8 {main}
2012-07-28 15:13:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:13:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:13:38 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Premature end of data (mysqlnd_wireprotocol.c:553) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-07-28 15:13:38 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Premature end of data (mysqlnd_wireprotocol.c:553) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Users/clay/Sites/Hackathon/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Users/clay/Sites/Hackathon/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /Users/clay/Sites/Hackathon/application/classes/controller/public/test.php(9): Kohana_Database_Query->execute()
#3 [internal function]: Controller_Public_Test->action_index()
#4 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Test))
#5 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/clay/Sites/Hackathon/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#8 {main}
2012-07-28 15:13:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:13:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:13:39 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Premature end of data (mysqlnd_wireprotocol.c:553) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-07-28 15:13:39 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Premature end of data (mysqlnd_wireprotocol.c:553) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Users/clay/Sites/Hackathon/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Users/clay/Sites/Hackathon/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /Users/clay/Sites/Hackathon/application/classes/controller/public/test.php(9): Kohana_Database_Query->execute()
#3 [internal function]: Controller_Public_Test->action_index()
#4 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Test))
#5 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/clay/Sites/Hackathon/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#8 {main}
2012-07-28 15:13:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:13:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:13:39 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Premature end of data (mysqlnd_wireprotocol.c:553) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-07-28 15:13:39 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Premature end of data (mysqlnd_wireprotocol.c:553) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Users/clay/Sites/Hackathon/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Users/clay/Sites/Hackathon/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /Users/clay/Sites/Hackathon/application/classes/controller/public/test.php(9): Kohana_Database_Query->execute()
#3 [internal function]: Controller_Public_Test->action_index()
#4 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Test))
#5 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/clay/Sites/Hackathon/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#8 {main}
2012-07-28 15:13:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:13:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:13:40 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Premature end of data (mysqlnd_wireprotocol.c:553) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-07-28 15:13:40 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Premature end of data (mysqlnd_wireprotocol.c:553) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Users/clay/Sites/Hackathon/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Users/clay/Sites/Hackathon/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /Users/clay/Sites/Hackathon/application/classes/controller/public/test.php(9): Kohana_Database_Query->execute()
#3 [internal function]: Controller_Public_Test->action_index()
#4 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Test))
#5 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/clay/Sites/Hackathon/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#8 {main}
2012-07-28 15:13:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:13:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:14:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:14:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:17:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:17:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:18:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:18:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:20:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:20:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:20:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:20:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:20:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:20:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:20:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:20:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:20:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:20:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:24:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:24:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:24:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:24:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:24:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:24:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:24:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:24:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:24:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:24:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:24:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:24:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:25:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:25:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:25:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:25:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:25:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:25:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:26:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:26:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:26:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:26:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:27:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:27:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:27:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:27:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:27:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:27:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:27:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:27:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:27:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:27:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:27:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:27:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:28:16 --- ERROR: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/kohana/database.php [ 78 ]
2012-07-28 15:28:16 --- STRACE: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/kohana/database.php [ 78 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-28 15:28:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:28:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:28:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:28:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:28:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:28:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:28:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: function.mysql-connect ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:28:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: function.mysql-connect ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:28:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:28:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:28:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:28:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:29:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:29:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:35:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:35:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:35:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:35:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:35:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:35:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:35:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:35:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:35:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:35:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:35:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:35:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:35:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:35:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:35:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:35:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:35:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:35:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:35:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:35:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:36:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:36:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:36:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:36:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:37:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:37:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:37:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:37:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:37:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:37:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:37:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:37:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:37:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:37:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:37:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:37:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:37:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:37:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:37:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:37:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:37:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:37:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:37:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:37:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:37:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:37:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:37:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:37:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:37:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:37:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:37:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:37:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:37:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:37:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:37:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:37:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:38:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:38:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:47:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:47:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:48:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:48:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:48:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:48:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:48:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:48:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:48:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:48:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 15:48:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 15:48:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:03:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:03:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:03:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:03:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:03:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:03:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:03:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:03:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:03:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:03:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:18:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:18:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:18:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:18:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:18:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:18:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:18:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:18:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:20:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:20:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:20:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:20:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:20:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:20:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:21:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:21:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:21:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:21:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:21:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:21:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:21:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:21:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:21:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:21:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:21:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:21:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:21:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:21:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:21:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:21:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:21:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:21:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:24:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:24:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:24:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:24:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:24:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:24:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:24:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:24:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:27:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:27:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:27:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:27:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:27:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:27:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:27:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:27:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:27:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:27:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:28:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:28:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:28:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:28:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:29:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:29:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:30:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:30:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:30:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:30:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:40:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:40:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:40:56 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::debug() ~ APPPATH/classes/controller/public/test.php [ 12 ]
2012-07-28 16:40:56 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::debug() ~ APPPATH/classes/controller/public/test.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-28 16:40:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:40:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:41:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:41:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:42:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:42:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:42:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:42:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:42:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:42:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:42:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:42:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:46:06 --- ERROR: ErrorException [ 1 ]: Class 'Model_Data_Stations' not found ~ APPPATH/classes/controller/public/test.php [ 10 ]
2012-07-28 16:46:06 --- STRACE: ErrorException [ 1 ]: Class 'Model_Data_Stations' not found ~ APPPATH/classes/controller/public/test.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-28 16:46:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:46:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:47:14 --- ERROR: ErrorException [ 1 ]: Class 'Model_Data_Stations' not found ~ APPPATH/classes/controller/public/test.php [ 10 ]
2012-07-28 16:47:14 --- STRACE: ErrorException [ 1 ]: Class 'Model_Data_Stations' not found ~ APPPATH/classes/controller/public/test.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-28 16:47:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:47:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:50:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_Data_Stations' not found ~ APPPATH/classes/controller/public/test.php [ 10 ]
2012-07-28 16:50:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_Data_Stations' not found ~ APPPATH/classes/controller/public/test.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-28 16:50:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:50:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:53:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:53:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:57:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:57:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 16:57:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 16:57:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:00:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-28 17:00:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/clay/Sites/Hackathon/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#3 {main}
2012-07-28 17:00:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:00:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:00:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-28 17:00:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/clay/Sites/Hackathon/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#3 {main}
2012-07-28 17:01:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:01:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:01:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:01:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:02:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-28 17:02:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/clay/Sites/Hackathon/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#3 {main}
2012-07-28 17:02:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:02:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:06:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-28 17:06:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/clay/Sites/Hackathon/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#3 {main}
2012-07-28 17:06:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:06:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:06:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-28 17:06:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/clay/Sites/Hackathon/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#3 {main}
2012-07-28 17:06:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:06:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:07:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-28 17:07:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/clay/Sites/Hackathon/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#3 {main}
2012-07-28 17:07:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:07:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:07:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-28 17:07:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/clay/Sites/Hackathon/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#3 {main}
2012-07-28 17:07:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:07:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:07:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-28 17:07:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/clay/Sites/Hackathon/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#3 {main}
2012-07-28 17:07:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:07:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:07:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-28 17:07:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/clay/Sites/Hackathon/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#3 {main}
2012-07-28 17:07:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:07:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:07:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:07:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:21:37 --- ERROR: ErrorException [ 4 ]: parse error ~ APPPATH/classes/controller/api/test.php [ 8 ]
2012-07-28 17:21:37 --- STRACE: ErrorException [ 4 ]: parse error ~ APPPATH/classes/controller/api/test.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-28 17:21:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:21:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:23:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:23:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:23:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/bootstrap-responsive.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:23:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/bootstrap-responsive.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:23:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/bootstrap-modal.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:23:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/bootstrap-modal.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:23:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:23:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:23:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/bootstrap-transition.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:23:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/bootstrap-transition.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:23:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/bootstrap-alert.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:23:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/bootstrap-alert.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:23:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/bootstrap-scrollspy.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:23:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/bootstrap-dropdown.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:23:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/bootstrap-scrollspy.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:23:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/bootstrap-dropdown.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:23:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/bootstrap-tab.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:23:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/bootstrap-tab.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:23:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/bootstrap-tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:23:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/bootstrap-tooltip.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:23:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/bootstrap-popover.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:23:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/bootstrap-popover.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:23:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/bootstrap-button.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:23:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/bootstrap-button.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:23:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/bootstrap-typeahead.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:23:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/bootstrap-collapse.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:23:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/bootstrap-typeahead.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:23:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/bootstrap-collapse.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:23:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/bootstrap-carousel.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:23:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/bootstrap-carousel.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:23:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:23:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:24:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/twitter.github.com/bootstrap/assets/css/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:24:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/twitter.github.com/bootstrap/assets/css/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:24:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/twitter.github.com/bootstrap/assets/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:24:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/twitter.github.com/bootstrap/assets/js/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:24:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:24:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:25:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/twitter.github.com/bootstrap/assets/css/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:25:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/twitter.github.com/bootstrap/assets/css/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:25:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:25:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:25:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:25:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:25:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:25:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:25:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:25:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:27:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:27:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:27:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:27:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:28:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/person was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-07-28 17:28:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/person was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/clay/Sites/Hackathon/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#3 {main}
2012-07-28 17:28:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:28:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:28:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:28:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:29:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:29:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:29:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:29:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:29:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:29:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:29:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:29:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:30:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:30:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:30:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:30:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:31:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/place/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-28 17:31:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/place/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/clay/Sites/Hackathon/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#3 {main}
2012-07-28 17:31:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:31:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:31:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/place/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-28 17:31:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/place/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/clay/Sites/Hackathon/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#3 {main}
2012-07-28 17:31:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:31:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:31:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/place/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-28 17:31:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/place/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/clay/Sites/Hackathon/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#3 {main}
2012-07-28 17:31:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:31:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:31:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/place/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-28 17:31:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/place/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/clay/Sites/Hackathon/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#3 {main}
2012-07-28 17:31:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:31:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:31:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/place/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-28 17:31:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/place/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/clay/Sites/Hackathon/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#3 {main}
2012-07-28 17:31:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:31:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:31:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/stats/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-28 17:31:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/stats/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/clay/Sites/Hackathon/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#3 {main}
2012-07-28 17:31:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:31:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:31:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:31:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:31:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:31:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:32:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:32:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:32:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:32:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:33:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/stats/crime was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-28 17:33:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/stats/crime was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/clay/Sites/Hackathon/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#3 {main}
2012-07-28 17:33:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:33:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:33:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:33:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:37:01 --- ERROR: ErrorException [ 2 ]: json_decode() expects parameter 1 to be string, array given ~ APPPATH/classes/controller/api/stats.php [ 16 ]
2012-07-28 17:37:01 --- STRACE: ErrorException [ 2 ]: json_decode() expects parameter 1 to be string, array given ~ APPPATH/classes/controller/api/stats.php [ 16 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'json_decode() e...', '/Users/clay/Sit...', 16, Array)
#1 /Users/clay/Sites/Hackathon/application/classes/controller/api/stats.php(16): json_decode(Array)
#2 [internal function]: Controller_Api_Stats->action_crime()
#3 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Api_Stats))
#4 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/clay/Sites/Hackathon/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#7 {main}
2012-07-28 17:37:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:37:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:37:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:37:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:37:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:37:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:38:01 --- ERROR: ErrorException [ 1 ]: Cannot access protected property Request::$_header ~ APPPATH/classes/controller/api/stats.php [ 12 ]
2012-07-28 17:38:01 --- STRACE: ErrorException [ 1 ]: Cannot access protected property Request::$_header ~ APPPATH/classes/controller/api/stats.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-28 17:38:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:38:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:38:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:38:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:38:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:38:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:38:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:38:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:38:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:38:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:38:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:38:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:39:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:39:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:40:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:40:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:40:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:40:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:42:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:42:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:43:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:43:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:45:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:45:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:46:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:46:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:46:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:46:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:46:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:46:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:47:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:47:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:47:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:47:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:49:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:49:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:50:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:50:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 17:50:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 17:50:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:00:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:00:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:00:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:00:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:01:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:01:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:01:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:01:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:01:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:01:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:19:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:19:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:19:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:19:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:19:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:19:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:20:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:20:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:20:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:20:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:21:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:21:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:21:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:21:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:21:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:21:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:22:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:22:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:33:11 --- ERROR: ErrorException [ 2048 ]: Non-static method Api_Core::check_limit() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/controller/api/stats.php [ 19 ]
2012-07-28 18:33:11 --- STRACE: ErrorException [ 2048 ]: Non-static method Api_Core::check_limit() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/controller/api/stats.php [ 19 ]
--
#0 /Users/clay/Sites/Hackathon/application/classes/controller/api/stats.php(19): Kohana_Core::error_handler(2048, 'Non-static meth...', '/Users/clay/Sit...', 19, Array)
#1 [internal function]: Controller_Api_Stats->action_crime()
#2 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Api_Stats))
#3 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/clay/Sites/Hackathon/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#6 {main}
2012-07-28 18:33:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:33:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:35:24 --- ERROR: ErrorException [ 2048 ]: Non-static method Api_Core::check_limit() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/controller/api/stats.php [ 19 ]
2012-07-28 18:35:24 --- STRACE: ErrorException [ 2048 ]: Non-static method Api_Core::check_limit() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/controller/api/stats.php [ 19 ]
--
#0 /Users/clay/Sites/Hackathon/application/classes/controller/api/stats.php(19): Kohana_Core::error_handler(2048, 'Non-static meth...', '/Users/clay/Sit...', 19, Array)
#1 [internal function]: Controller_Api_Stats->action_crime()
#2 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Api_Stats))
#3 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/clay/Sites/Hackathon/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#6 {main}
2012-07-28 18:35:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:35:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:36:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: limit ~ APPPATH/classes/controller/api/stats.php [ 24 ]
2012-07-28 18:36:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: limit ~ APPPATH/classes/controller/api/stats.php [ 24 ]
--
#0 /Users/clay/Sites/Hackathon/application/classes/controller/api/stats.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/clay/Sit...', 24, Array)
#1 [internal function]: Controller_Api_Stats->action_crime()
#2 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Api_Stats))
#3 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/clay/Sites/Hackathon/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#6 {main}
2012-07-28 18:36:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:36:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:36:24 --- ERROR: ErrorException [ 8 ]: Undefined index: token ~ APPPATH/classes/model/api/stats/crime.php [ 7 ]
2012-07-28 18:36:24 --- STRACE: ErrorException [ 8 ]: Undefined index: token ~ APPPATH/classes/model/api/stats/crime.php [ 7 ]
--
#0 /Users/clay/Sites/Hackathon/application/classes/model/api/stats/crime.php(7): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/clay/Sit...', 7, Array)
#1 /Users/clay/Sites/Hackathon/application/classes/controller/api/stats.php(24): Model_Api_Stats_Crime->get_records()
#2 [internal function]: Controller_Api_Stats->action_crime()
#3 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Api_Stats))
#4 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/clay/Sites/Hackathon/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#7 {main}
2012-07-28 18:36:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:36:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:36:42 --- ERROR: ErrorException [ 8 ]: Undefined index: token ~ APPPATH/classes/model/api/stats/crime.php [ 7 ]
2012-07-28 18:36:42 --- STRACE: ErrorException [ 8 ]: Undefined index: token ~ APPPATH/classes/model/api/stats/crime.php [ 7 ]
--
#0 /Users/clay/Sites/Hackathon/application/classes/model/api/stats/crime.php(7): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/clay/Sit...', 7, Array)
#1 /Users/clay/Sites/Hackathon/application/classes/controller/api/stats.php(24): Model_Api_Stats_Crime->get_records()
#2 [internal function]: Controller_Api_Stats->action_crime()
#3 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Api_Stats))
#4 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/clay/Sites/Hackathon/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#7 {main}
2012-07-28 18:36:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:36:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:36:58 --- ERROR: ErrorException [ 8 ]: Undefined index: token ~ APPPATH/classes/model/api/stats/crime.php [ 7 ]
2012-07-28 18:36:58 --- STRACE: ErrorException [ 8 ]: Undefined index: token ~ APPPATH/classes/model/api/stats/crime.php [ 7 ]
--
#0 /Users/clay/Sites/Hackathon/application/classes/model/api/stats/crime.php(7): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/clay/Sit...', 7, Array)
#1 /Users/clay/Sites/Hackathon/application/classes/controller/api/stats.php(24): Model_Api_Stats_Crime->get_records()
#2 [internal function]: Controller_Api_Stats->action_crime()
#3 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Api_Stats))
#4 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/clay/Sites/Hackathon/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#7 {main}
2012-07-28 18:36:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:36:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:37:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:37:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:37:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:37:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:39:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:39:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:39:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:39:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:39:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:39:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:39:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:39:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:39:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:39:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:39:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:39:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:39:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:39:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:40:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:40:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:40:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:40:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:41:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:41:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:41:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:41:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:41:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:41:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:41:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:41:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:41:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:41:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:42:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:42:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:42:20 --- ERROR: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ APPPATH/classes/controller/api/stats.php [ 18 ]
2012-07-28 18:42:20 --- STRACE: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ APPPATH/classes/controller/api/stats.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-28 18:42:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:42:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:42:31 --- ERROR: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ APPPATH/classes/controller/api/stats.php [ 18 ]
2012-07-28 18:42:31 --- STRACE: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ APPPATH/classes/controller/api/stats.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-28 18:42:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:42:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:42:39 --- ERROR: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ APPPATH/classes/controller/api/stats.php [ 18 ]
2012-07-28 18:42:39 --- STRACE: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ APPPATH/classes/controller/api/stats.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-28 18:42:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:42:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:44:04 --- ERROR: ErrorException [ 1 ]: Call to undefined function http_response_code() ~ APPPATH/classes/controller/api.php [ 9 ]
2012-07-28 18:44:04 --- STRACE: ErrorException [ 1 ]: Call to undefined function http_response_code() ~ APPPATH/classes/controller/api.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-28 18:44:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:44:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:44:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:44:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:44:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:44:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:44:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:44:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:47:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:47:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:47:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:47:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:47:53 --- ERROR: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ APPPATH/classes/controller/api/stats.php [ 18 ]
2012-07-28 18:47:53 --- STRACE: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ APPPATH/classes/controller/api/stats.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-28 18:47:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:47:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:48:14 --- ERROR: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ APPPATH/classes/controller/api/stats.php [ 18 ]
2012-07-28 18:48:14 --- STRACE: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ APPPATH/classes/controller/api/stats.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-28 18:48:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:48:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:48:31 --- ERROR: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ APPPATH/classes/controller/api/stats.php [ 18 ]
2012-07-28 18:48:31 --- STRACE: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ APPPATH/classes/controller/api/stats.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-28 18:48:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:48:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:48:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:48:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:48:56 --- ERROR: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ APPPATH/classes/controller/api/stats.php [ 18 ]
2012-07-28 18:48:56 --- STRACE: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ APPPATH/classes/controller/api/stats.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-28 18:48:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:48:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:49:21 --- ERROR: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ APPPATH/classes/controller/api/stats.php [ 18 ]
2012-07-28 18:49:21 --- STRACE: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ APPPATH/classes/controller/api/stats.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-28 18:49:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:49:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:49:34 --- ERROR: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ APPPATH/classes/controller/api/stats.php [ 18 ]
2012-07-28 18:49:34 --- STRACE: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ APPPATH/classes/controller/api/stats.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-28 18:49:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:49:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:49:44 --- ERROR: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ APPPATH/classes/controller/api/stats.php [ 14 ]
2012-07-28 18:49:44 --- STRACE: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ APPPATH/classes/controller/api/stats.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-28 18:49:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:49:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:49:45 --- ERROR: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ APPPATH/classes/controller/api/stats.php [ 14 ]
2012-07-28 18:49:45 --- STRACE: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ APPPATH/classes/controller/api/stats.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-28 18:49:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:49:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:49:51 --- ERROR: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ APPPATH/classes/controller/api/stats.php [ 13 ]
2012-07-28 18:49:51 --- STRACE: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ APPPATH/classes/controller/api/stats.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-28 18:49:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:49:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:50:18 --- ERROR: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ APPPATH/classes/controller/api/stats.php [ 13 ]
2012-07-28 18:50:18 --- STRACE: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ APPPATH/classes/controller/api/stats.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-28 18:50:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:50:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:50:25 --- ERROR: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ APPPATH/classes/controller/api/stats.php [ 13 ]
2012-07-28 18:50:25 --- STRACE: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ APPPATH/classes/controller/api/stats.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-28 18:50:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:50:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:50:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: limit ~ APPPATH/classes/model/api/stats/crime.php [ 10 ]
2012-07-28 18:50:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: limit ~ APPPATH/classes/model/api/stats/crime.php [ 10 ]
--
#0 /Users/clay/Sites/Hackathon/application/classes/model/api/stats/crime.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/clay/Sit...', 10, Array)
#1 /Users/clay/Sites/Hackathon/application/classes/controller/api/stats.php(19): Model_Api_Stats_Crime->get_records()
#2 [internal function]: Controller_Api_Stats->action_crime()
#3 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Api_Stats))
#4 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/clay/Sites/Hackathon/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#7 {main}
2012-07-28 18:50:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:50:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:50:46 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Kohana_Database_Query_Builder_Where::limit(), called in /Users/clay/Sites/Hackathon/application/classes/model/api/stats/crime.php on line 10 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 153 ]
2012-07-28 18:50:46 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Kohana_Database_Query_Builder_Where::limit(), called in /Users/clay/Sites/Hackathon/application/classes/model/api/stats/crime.php on line 10 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 153 ]
--
#0 /Users/clay/Sites/Hackathon/modules/database/classes/kohana/database/query/builder/where.php(153): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/clay/Sit...', 153, Array)
#1 /Users/clay/Sites/Hackathon/application/classes/model/api/stats/crime.php(10): Kohana_Database_Query_Builder_Where->limit()
#2 /Users/clay/Sites/Hackathon/application/classes/controller/api/stats.php(19): Model_Api_Stats_Crime->get_records()
#3 [internal function]: Controller_Api_Stats->action_crime()
#4 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Api_Stats))
#5 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/clay/Sites/Hackathon/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#8 {main}
2012-07-28 18:50:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:50:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:51:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:51:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:51:57 --- ERROR: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ APPPATH/classes/controller/api/stats.php [ 13 ]
2012-07-28 18:51:57 --- STRACE: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ APPPATH/classes/controller/api/stats.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-28 18:51:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:51:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:52:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:52:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:52:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:52:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:52:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:52:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:52:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:52:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:53:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:53:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:53:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:53:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:53:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:53:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:54:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:54:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 18:57:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 18:57:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:01:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:01:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:01:44 --- ERROR: ErrorException [ 4 ]: parse error ~ APPPATH/classes/controller/api/docs.php [ 9 ]
2012-07-28 19:01:44 --- STRACE: ErrorException [ 4 ]: parse error ~ APPPATH/classes/controller/api/docs.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-28 19:01:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:01:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:04:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:04:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:05:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:05:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:06:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:06:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:06:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:06:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:06:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:06:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:06:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:06:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:06:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:06:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:07:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/docs/stats was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-28 19:07:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/docs/stats was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/clay/Sites/Hackathon/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#3 {main}
2012-07-28 19:07:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:07:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:07:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/docs/stats was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-28 19:07:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/docs/stats was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/clay/Sites/Hackathon/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#3 {main}
2012-07-28 19:07:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:07:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:08:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:08:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:08:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:08:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:08:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:08:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:09:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:09:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:09:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:09:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:09:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:09:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:09:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:09:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:09:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:09:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:09:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:09:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:09:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:09:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:10:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:10:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:11:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:11:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:12:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:12:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:12:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:12:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:12:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:12:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:13:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:13:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:13:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:13:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:13:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:13:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:13:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:13:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:13:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:13:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:13:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:13:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:13:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:13:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:13:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:13:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:13:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:13:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:13:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:13:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:13:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:13:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:13:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:13:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:14:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:14:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:14:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:14:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:14:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:14:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:14:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:14:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:14:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:14:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:14:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:14:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:14:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:14:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:14:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:14:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:14:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:14:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:14:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:14:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:15:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:15:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:15:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:15:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:16:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:16:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:16:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:16:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:17:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:17:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:17:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:17:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:17:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:17:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:17:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:17:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:18:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:18:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:19:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:19:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:20:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:20:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:20:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:20:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:20:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:20:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:20:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:20:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:21:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:21:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:21:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:21:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:21:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:21:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:21:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:21:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:21:46 --- ERROR: ErrorException [ 4 ]: parse error ~ APPPATH/classes/controller/api.php [ 18 ]
2012-07-28 19:21:46 --- STRACE: ErrorException [ 4 ]: parse error ~ APPPATH/classes/controller/api.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-28 19:21:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:21:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:22:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:22:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:22:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:22:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:22:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:22:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:22:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:22:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:22:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:22:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:23:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:23:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:23:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:23:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:23:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:23:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:23:53 --- ERROR: ErrorException [ 4 ]: parse error, expecting `')'' ~ APPPATH/classes/model/api/stats/crime.php [ 5 ]
2012-07-28 19:23:53 --- STRACE: ErrorException [ 4 ]: parse error, expecting `')'' ~ APPPATH/classes/model/api/stats/crime.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-28 19:23:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:23:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:24:56 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Model_Api_Stats_Crime::get_records() must be an instance of int, integer given, called in /Users/clay/Sites/Hackathon/application/classes/controller/api/stats.php on line 13 and defined ~ APPPATH/classes/model/api/stats/crime.php [ 5 ]
2012-07-28 19:24:56 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Model_Api_Stats_Crime::get_records() must be an instance of int, integer given, called in /Users/clay/Sites/Hackathon/application/classes/controller/api/stats.php on line 13 and defined ~ APPPATH/classes/model/api/stats/crime.php [ 5 ]
--
#0 /Users/clay/Sites/Hackathon/application/classes/model/api/stats/crime.php(5): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Users/clay/Sit...', 5, Array)
#1 /Users/clay/Sites/Hackathon/application/classes/controller/api/stats.php(13): Model_Api_Stats_Crime->get_records(25)
#2 [internal function]: Controller_Api_Stats->action_crime()
#3 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Api_Stats))
#4 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/clay/Sites/Hackathon/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#7 {main}
2012-07-28 19:24:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:24:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:25:08 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Model_Api_Stats_Crime::get_records() must be an instance of integer, integer given, called in /Users/clay/Sites/Hackathon/application/classes/controller/api/stats.php on line 13 and defined ~ APPPATH/classes/model/api/stats/crime.php [ 5 ]
2012-07-28 19:25:08 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Model_Api_Stats_Crime::get_records() must be an instance of integer, integer given, called in /Users/clay/Sites/Hackathon/application/classes/controller/api/stats.php on line 13 and defined ~ APPPATH/classes/model/api/stats/crime.php [ 5 ]
--
#0 /Users/clay/Sites/Hackathon/application/classes/model/api/stats/crime.php(5): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Users/clay/Sit...', 5, Array)
#1 /Users/clay/Sites/Hackathon/application/classes/controller/api/stats.php(13): Model_Api_Stats_Crime->get_records(25)
#2 [internal function]: Controller_Api_Stats->action_crime()
#3 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Api_Stats))
#4 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/clay/Sites/Hackathon/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#7 {main}
2012-07-28 19:25:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:25:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:25:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:25:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:25:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:25:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:25:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:25:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:28:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:28:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:28:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:28:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:28:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:28:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:28:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:28:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:28:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:28:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:30:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/stats was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-28 19:30:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/stats was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/clay/Sites/Hackathon/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#3 {main}
2012-07-28 19:30:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:30:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:30:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:30:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:30:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:30:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:30:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/stats was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-07-28 19:30:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/stats was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/clay/Sites/Hackathon/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#3 {main}
2012-07-28 19:30:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:30:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:30:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:30:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:30:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:30:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:30:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:30:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:30:40 --- ERROR: ErrorException [ 8 ]: Undefined index: limit ~ APPPATH/classes/controller/api/stats.php [ 16 ]
2012-07-28 19:30:40 --- STRACE: ErrorException [ 8 ]: Undefined index: limit ~ APPPATH/classes/controller/api/stats.php [ 16 ]
--
#0 /Users/clay/Sites/Hackathon/application/classes/controller/api/stats.php(16): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/clay/Sit...', 16, Array)
#1 [internal function]: Controller_Api_Stats->action_crime()
#2 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Api_Stats))
#3 /Users/clay/Sites/Hackathon/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/clay/Sites/Hackathon/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#6 {main}
2012-07-28 19:30:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:30:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:30:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:30:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:30:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:30:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:31:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:31:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:31:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:31:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:33:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:33:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:33:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:33:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:33:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:33:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:34:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:34:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:35:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:35:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:35:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:35:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:38:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:38:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}
2012-07-28 19:39:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-07-28 19:39:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/clay/Sites/Hackathon/index.php(104): Kohana_Request->execute()
#1 {main}