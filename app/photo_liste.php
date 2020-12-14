<?php
            $photo_1_query = $db->connect()->prepare('SELECT * FROM user_photos INNER JOIN users ON user_photos.user_id = users.id WHERE time < ? ORDER BY time DESC LIMIT  1');
            $photo_1_query->execute([time()]);
            $fetch1 = $photo_1_query->fetch();
            $photo_username_1 = $fetch1['username'];
            $date_posted_1 = $system->timeAgo($fetch1['time']);
            $photo_avatar_1 = $fetch1['look'];
            $photo_image_1 = $fetch1['photo'];

            $photo_2_query = $db->connect()->prepare('SELECT * FROM user_photos INNER JOIN users ON user_photos.user_id = users.id WHERE time < ? ORDER BY time DESC LIMIT  1,2');
            $photo_2_query->execute([time()]);
            $fetch2 = $photo_2_query->fetch();
            $photo_username_2 = $fetch2['username'];
            $date_posted_2 = $system->timeAgo($fetch2['time']);
            $photo_avatar_2 = $fetch2['look'];
            $photo_image_2 = $fetch2['photo'];

            $photo_3_query = $db->connect()->prepare('SELECT * FROM user_photos INNER JOIN users ON user_photos.user_id = users.id WHERE time < ? ORDER BY time DESC LIMIT  2,3');
            $photo_3_query->execute([time()]);
            $fetch3 = $photo_3_query->fetch();
            $photo_username_3 = $fetch3['username'];
            $date_posted_3 = $system->timeAgo($fetch3['time']);
            $photo_avatar_3 = $fetch3['look'];
            $photo_image_3 = $fetch3['photo'];

            $photo_4_query = $db->connect()->prepare('SELECT * FROM user_photos INNER JOIN users ON user_photos.user_id = users.id WHERE time < ? ORDER BY time DESC LIMIT  3,4');
            $photo_4_query->execute([time()]);
            $fetch4 = $photo_4_query->fetch();
            $photo_username_4 = $fetch4['username'];
            $date_posted_4 = $system->timeAgo($fetch4['time']);
            $photo_avatar_4 = $fetch4['look'];
            $photo_image_4 = $fetch4['photo'];
 ?>