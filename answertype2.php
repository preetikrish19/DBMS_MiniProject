<?php 
    session_start();
    if(isset($_SESSION['login'])){
        if($_SESSION['login'] == 0){
        include('db.php');
        if (isset($_POST['liked'])) {
            $postid = $_POST['postid'];
            //echo $postid;
            $result = mysqli_query($con, "SELECT * FROM answers WHERE ans_id=$postid");
            $row = mysqli_fetch_array($result, MYSQLI_BOTH);
            $n = $row['likes'];
            //echo $n;
            mysqli_query($con, "INSERT INTO answerlikes (ans_id, user_id, login_type) VALUES ($postid, $_SESSION[uid], $_SESSION[login])");
            mysqli_query($con, "UPDATE answers SET likes=$n+1 WHERE ans_id=$postid");

            echo $n+1;
            exit();
        }
        if (isset($_POST['unliked'])) {
            $postid = $_POST['postid'];
            $result = mysqli_query($con, "SELECT * FROM answers WHERE ans_id=$postid");
            $row = mysqli_fetch_array($result);
            $n = $row['likes'];

            mysqli_query($con, "DELETE FROM answerlikes WHERE ans_id=$postid AND user_id=$_SESSION[uid] AND login_type=$_SESSION[login]");
            mysqli_query($con, "UPDATE answers SET likes=$n-1 WHERE ans_id=$postid");
            
            echo $n-1;
            exit();
        }

        $qid = $_POST['qid']; 
        //echo $qid;
        $sql3 = "SELECT * FROM linkagestudent WHERE qid=$qid ORDER BY likes DESC";
        $result3 = mysqli_query($con, $sql3);
        $details3 = mysqli_fetch_all($result3, MYSQLI_ASSOC);
        //if($type == 1){
            foreach($details3 as $detail3){
                echo "
                <div class='ans'>
                <b><h4 style='color: white'>$detail3[name]</h4></b>
                <ul>
                <li>
                <div>
                <p style='color: white'>$detail3[answer]</p>
                </div>
                </li>
                <li>
                <div style='padding: 2px; margin-top: 5px;'>";
                        $results = mysqli_query($con, "SELECT * FROM answerlikes WHERE user_id=$_SESSION[uid] AND ans_id=$detail3[ans_id] AND login_type=$_SESSION[login]");
                        if (mysqli_num_rows($results) == 1 ):
                            echo "
                            <span class='unlike fa fa-thumbs-up' data-id='$detail3[ans_id]'></span> 
                            <span class='like hide fa fa-thumbs-o-up' data-id='$detail3[ans_id]'></span>"; 
                        else:
                            echo "
                            <span class='like fa fa-thumbs-o-up' data-id='$detail3[ans_id]'></span> 
                            <span class='unlike hide fa fa-thumbs-up' data-id='$detail3[ans_id]'></span>"; 
                        endif;
                            echo "<span class='likes_count'>  $detail3[likes] likes</span>";
                echo"
                    </div>
                </li>
                </ul>
            </div>";
            }
        /*
        }
        elseif($type == 0){
            foreach($details3 as $detail3){
                echo "
                <div class='ans'>
                <b><h4 style='color: white'>$detail3[name]</h4></b>
                <ul>
                <li>
                <div>
                <p style='color: white'>$detail3[answer]</p>
                </div>
                </li>
                <li>
                <div>
                <button><img src='dislike.png'  width='10px' height='10px'> $detail3[likes]</button>
                </div>
                </li>
                </ul>
            </div>";
            }
        }
        */
        //print_r($details2);
        //print_r($details3);
    ?>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <script>
        $(document).ready(function(){
            // when the user clicks on like
            $('.like').on('click', function(){
                var postid = $(this).data('id');
                    $post = $(this);
                    console.log(postid);

                $.ajax({
                    url: 'answertype.php',
                    type: 'post',
                    data: {
                        'liked': 1,
                        'postid': postid
                    },
                    success: function(response){
                        $post.parent().find('span.likes_count').text(response + " likes");
                        $post.addClass('hide');
                        $post.siblings().removeClass('hide');
                    }
                });
            });

            // when the user clicks on unlike
            $('.unlike').on('click', function(){
                var postid = $(this).data('id');
                $post = $(this);

                $.ajax({
                    url: 'answertype.php',
                    type: 'post',
                    data: {
                        'unliked': 1,
                        'postid': postid
                    },
                    success: function(response){
                        $post.parent().find('span.likes_count').text(response + " likes");
                        $post.addClass('hide');
                        $post.siblings().removeClass('hide');
                    }
                });
            });
        });
    </script>
    <style>
    .like, .unlike, .likes_count {
        color: white;
    }
    .hide {
        display: none;
    }
    .fa-thumbs-up, .fa-thumbs-o-up {
        transform: rotateY(-180deg);
        font-size: 1.3em;
    }
    </style>
    <?php }
    elseif ($_SESSION['login']==1){
        include('db.php');
        if (isset($_POST['liked'])) {
            $postid = $_POST['postid'];
            //echo $postid;
            $result = mysqli_query($con, "SELECT * FROM answers WHERE ans_id=$postid");
            $row = mysqli_fetch_array($result, MYSQLI_BOTH);
            $n = $row['likes'];
            //echo $n;
            mysqli_query($con, "INSERT INTO answerlikes (ans_id, user_id, login_type) VALUES ($postid, $_SESSION[mid], $_SESSION[login])");
            mysqli_query($con, "UPDATE answers SET likes=$n+1 WHERE ans_id=$postid");

            echo $n+1;
            exit();
        }
        if (isset($_POST['unliked'])) {
            $postid = $_POST['postid'];
            $result = mysqli_query($con, "SELECT * FROM answers WHERE ans_id=$postid");
            $row = mysqli_fetch_array($result);
            $n = $row['likes'];

            mysqli_query($con, "DELETE FROM answerlikes WHERE ans_id=$postid AND user_id=$_SESSION[mid] AND login_type=$_SESSION[login]");
            mysqli_query($con, "UPDATE answers SET likes=$n-1 WHERE ans_id=$postid");
            
            echo $n-1;
            exit();
        }

        $qid = $_POST['qid']; 
        //echo $qid;
        $sql3 = "SELECT * FROM linkagestudent WHERE qid=$qid ORDER BY likes DESC";
        $result3 = mysqli_query($con, $sql3);
        $details3 = mysqli_fetch_all($result3, MYSQLI_ASSOC);
        //if($type == 1){
            foreach($details3 as $detail3){
                echo "
                <div class='ans'>
                <b><h4 style='color: white'>$detail3[name]</h4></b>
                <ul>
                <li>
                <div>
                <p style='color: white'>$detail3[answer]</p>
                </div>
                </li>
                <li>
                <div style='padding: 2px; margin-top: 5px;'>";
                        $results = mysqli_query($con, "SELECT * FROM answerlikes WHERE user_id=$_SESSION[mid] AND ans_id=$detail3[ans_id] AND login_type=$_SESSION[login]");
                        if (mysqli_num_rows($results) == 1 ):
                            echo "
                            <span class='unlike fa fa-thumbs-up' data-id='$detail3[ans_id]'></span> 
                            <span class='like hide fa fa-thumbs-o-up' data-id='$detail3[ans_id]'></span>"; 
                        else:
                            echo "
                            <span class='like fa fa-thumbs-o-up' data-id='$detail3[ans_id]'></span> 
                            <span class='unlike hide fa fa-thumbs-up' data-id='$detail3[ans_id]'></span>"; 
                        endif;
                            echo "<span class='likes_count'>  $detail3[likes] likes</span>";
                echo"
                    </div>
                </li>
                </ul>
            </div>";
            }
        /*
        }
        elseif($type == 0){
            foreach($details3 as $detail3){
                echo "
                <div class='ans'>
                <b><h4 style='color: white'>$detail3[name]</h4></b>
                <ul>
                <li>
                <div>
                <p style='color: white'>$detail3[answer]</p>
                </div>
                </li>
                <li>
                <div>
                <button><img src='dislike.png'  width='10px' height='10px'> $detail3[likes]</button>
                </div>
                </li>
                </ul>
            </div>";
            }
        }
        */
        //print_r($details2);
        //print_r($details3);
    ?>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <script>
        $(document).ready(function(){
            // when the user clicks on like
            $('.like').on('click', function(){
                var postid = $(this).data('id');
                    $post = $(this);
                    console.log(postid);

                $.ajax({
                    url: 'answertype.php',
                    type: 'post',
                    data: {
                        'liked': 1,
                        'postid': postid
                    },
                    success: function(response){
                        $post.parent().find('span.likes_count').text(response + " likes");
                        $post.addClass('hide');
                        $post.siblings().removeClass('hide');
                    }
                });
            });

            // when the user clicks on unlike
            $('.unlike').on('click', function(){
                var postid = $(this).data('id');
                $post = $(this);

                $.ajax({
                    url: 'answertype.php',
                    type: 'post',
                    data: {
                        'unliked': 1,
                        'postid': postid
                    },
                    success: function(response){
                        $post.parent().find('span.likes_count').text(response + " likes");
                        $post.addClass('hide');
                        $post.siblings().removeClass('hide');
                    }
                });
            });
        });
    </script>
    <style>
    .like, .unlike, .likes_count {
        color: white;
    }
    .hide {
        display: none;
    }
    .fa-thumbs-up, .fa-thumbs-o-up {
        transform: rotateY(-180deg);
        font-size: 1.3em;
    }
    </style>
    <?php } ?>
    <?php } ?>
