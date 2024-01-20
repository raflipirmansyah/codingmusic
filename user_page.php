
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Music Player Platform | AsmrProg</title>
</head>

<body>

    <div class="container">
        <aside class="sidebar">
            <div class="logo">
                <button class="menu-btn" id="menu-close">
                    <i class='bx bx-log-out-circle'></i>
                </button>
                <i class='bx bx-pulse'></i>
                <a href="#">AsmrProg</a>
            </div>

            <div class="menu">
                <h5>Menu</h5>
                <ul>
                    <li>
                        <i class='bx bxs-bolt-circle'></i>
                        <a href="#">Explore</a>
                    </li>
                    <li>
                        <i class='bx bxs-volume-full'></i>
                        <a href="#">Genres</a>
                    </li>
                    <li>
                        <i class='bx bxs-album'></i>
                        <a href="#">Albums</a>
                    </li>
                    <li>
                        <i class='bx bxs-microphone'></i>
                        <a href="#">Artists</a>
                    </li>
                    <li>
                        <i class='bx bxs-radio'></i>
                        <a href="#">Poddcasts</a>
                    </li>
                </ul>
            </div>

            <div class="menu">
                <h5>Library</h5>
                <ul>
                    <li>
                        <i class='bx bx-undo'></i>
                        <a href="#">Recent</a>
                    </li>
                    <li>
                        <i class='bx bxs-photo-album'></i>
                        <a href="#">Albums</a>
                    </li>
                    <li>
                        <i class='bx bxs-heart'></i>
                        <a href="#">Favourites</a>
                    </li>
                    <li>
                        <i class='bx bxs-folder'></i>
                        <a href="#">Local</a>
                    </li>

                </ul>
            </div>

            <div class="menu">
                <h5>Playlist</h5>
                <ul>
                    <li>
                        <i class='bx bxs-plus-square'></i>
                        <a href="#">Create New</a>
                    </li>
                    <li>
                        <i class='bx bxs-caret-right-circle'></i>
                        <a href="#">Best of 2023</a>
                    </li>
                    <li>
                        <i class='bx bxs-caret-right-circle'></i>
                        <a href="#">Best of 2022</a>
                    </li>
                    <li>
                        <i class='bx bxs-caret-right-circle'></i>
                        <a href="#">Kael Fischer</a>
                    </li>

                </ul>
            </div>

            <div class="playing">
                <div class="top">
                    <img src="assets/current.png">
                    <h4>Apple<br>Homepod</h4>
                </div>
                <div class="bottom">
                    <i class='bx bx-podcast'></i>
                    <p>Playing On Device</p>
                </div>
            </div>


        </aside>

        <main>
            <header>
                <div class="nav-links">
                    <button class="menu-btn" id="menu-open">
                        <i class='bx bx-menu'></i>
                    </button>
                    <a href="#">Music</a>
                    <a href="#">Live</a>
                    <a href="#">Podcast</a>
                </div>

                <div class="search">
                    <i class='bx bx-search'></i>
                    <input type="text" placeholder="Type here to search">
                </div>

            </header>

            <div class="trending">
                <div class="left">
                    <h5>Trending New Song</h5>
                    <div class="info">
                        <h2>Lost Emotions</h2>
                        <h4>Rion Clarke</h4>
                        <h5>63 Million Plays</h5>
                        <div class="buttons">
                            <button>Listen Now</button>
                            <i class='bx bxs-heart'></i>
                        </div>
                    </div>
                </div>
                <img src="assets/trend.png">
            </div>

            <div class="playlist">
                <div class="genres">
                    <div class="header">
                        <h5>Genres</h5>
                        <a href="#">See all</a>
                    </div>

                    <div class="items">
                        <div class="item">
                            <p>Electro<br>Pop</p>
                        </div>
                        <div class="item">
                            <p>Dance<br>Beeat</p>
                        </div>
                        <div class="item">
                            <p>Clubhouse<br>Remix</p>
                        </div>
                        <div class="item">
                            <p>Hip Hop<br>Rap</p>
                        </div>
                        <div class="item">
                            <p>Alternative<br>Indie</p>
                        </div>
                        <div class="item">
                            <p>Classical<br>Period</p>
                        </div>
                    </div>

                </div>

                <div class="music-list">
                    <div class="header">
                        <h5>Top Songs</h5>
                        <a href="#">See all</a>
                    </div>

                    <div class="items">
                        <div class="item">
                            <div class="info">
                                <p>01</p>
                                <img src="assets/song-1.png">
                                <div class="details">
                                    <h5>Sunrise</h5>
                                    <p>Lila Rivera</p>
                                </div>
                            </div>
                            <div class="actions">
                                <p>03:45</p>
                                <div class="icon">
                                    <i class='bx bxs-right-arrow'></i>
                                </div>
                                <i class='bx bxs-plus-square'></i>
                            </div>
                        </div>
                        <div class="item">
                            <div class="info">
                                <p>02</p>
                                <img src="assets/song-2.png">
                                <div class="details">
                                    <h5>Voyage</h5>
                                    <p>Tyde Brennnan</p>
                                </div>
                            </div>
                            <div class="actions">
                                <p>04:35</p>
                                <div class="icon">
                                    <i class='bx bxs-right-arrow'></i>
                                </div>
                                <i class='bx bxs-plus-square'></i>
                            </div>
                        </div>
                        <div class="item">
                            <div class="info">
                                <p>03</p>
                                <img src="assets/song-3.png">
                                <div class="details">
                                    <h5>Breeze</h5>
                                    <p>Sola Kim</p>
                                </div>
                            </div>
                            <div class="actions">
                                <p>04:22</p>
                                <div class="icon">
                                    <i class='bx bxs-right-arrow'></i>
                                </div>
                                <i class='bx bxs-plus-square'></i>
                            </div>
                        </div>
                        <div class="item">
                            <div class="info">
                                <p>04</p>
                                <img src="assets/song-4.png">
                                <div class="details">
                                    <h5>Twilight</h5>
                                    <p>Jett Lawsonn</p>
                                </div>
                            </div>
                            <div class="actions">
                                <p>03:17</p>
                                <div class="icon">
                                    <i class='bx bxs-right-arrow'></i>
                                </div>
                                <i class='bx bxs-plus-square'></i>
                            </div>
                        </div>
                    </div>

                </div>

            </div>


        </main>

        <div class="right-section">

            <div class="profile">
                <i class='bx bxs-bell'></i>
                <i class='bx bxs-cog'></i>
                <div class="user">
                    <div class="left">
                        <img src="assets/profile.png">
                    </div>
                    <div class="right">
                        <h5>Jhon Doe</h5>
                    </div>
                </div>
            </div>

            <div class="music-player">
                <div class="top-section">
                    <div class="header">
                        <h5>Player</h5>
                        <i class='bx bxs-playlist'></i>
                    </div>
                    <div class="song-info">
                        <img src="assets/player.png">
                        <div class="description">
                            <h3>Ripple Echoes</h3>
                            <h5>Kael Fischer</h5>
                            <p>Best of 2024</p>
                        </div>
                        <div class="progress">
                            <p>02:45</p>
                            <div class="active-line"></div>
                            <div class="deactive-line"></div>
                            <p>01:02</p>
                        </div>
                    </div>
                </div>

                <div class="player-actions">
                    <div class="buttons">
                        <i class='bx bx-repeat'></i>
                        <i class='bx bx-first-page'></i>
                        <i class='bx bxs-right-arrow play-button'></i>
                        <i class='bx bx-last-page'></i>
                        <i class='bx bx-transfer-alt'></i>
                    </div>
                    <div class="lyrics">
                        <i class='bx bx-chevron-up'></i>
                        <h5>LYRICS</h5>
                    </div>
                </div>

            </div>

            <style>
               @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
}

a{
    text-decoration: none;
    color: #fff;
}

i{
    color: #fff;
    cursor: pointer;
}

img{
    object-fit: cover;
    object-position: top;
    border-radius: 8px;
}

html,
body{
    background: linear-gradient(#050505, #18181d);
    height: 100vh;
}

.container{
    width: 100%;
    display: grid;
    grid-template-columns: 1fr 4fr 2fr;
    background: linear-gradient(#050505, #18181d);;
}

.container .sidebar{
    height: 100vh;
    background-color: #18181d;
    padding: 20px 36px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    z-index: 10000;
    transition: all 0.6s ease;
}

.container .sidebar .logo{
    display: flex;
    align-items: center;
    gap: 6px;
}

.container .sidebar .logo > i{
    font-size: 24px;
    transition: all 0.3s ease;
}

.container .sidebar .logo a{
    font-weight: bold;
    transition: all 0.3s ease;
}

.container .sidebar .logo a:hover,
.container .sidebar .menu ul li:hover a,
.container .sidebar .menu ul li:hover i,
.container main header .nav-links a:hover{
    color: #5773ff;
}

.container .sidebar .menu h5{
    color: #919191;
    margin-bottom: 12px;
    text-transform: uppercase;
}

.container .sidebar .menu ul{
    list-style: none;
}

.container .sidebar .menu ul li{
    margin-bottom: 12px;
    display: flex;
    align-items: center;
    gap: 20px;
    cursor: pointer;
}

.container .sidebar .menu ul li a{
    font-size: 14px;
    font-weight: bold;
    transition: all 0.3s ease;
}

.container .sidebar .playing .top{
    background-color: #32323d;
    border-radius: 6px 6px 0 0;
    padding: 10px;
    display: flex;
    align-items: center;
    gap: 10px;
    color: #fff;
    font-size: 13px;
}

.container .sidebar .playing .top img{
    width: 36px;
    height: 36px;
}

.container .sidebar .playing .bottom{
    background-color: #25252d;
    border-radius: 0 0 6px 6px;
    padding: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
    font-size: 12px;
}

.container .sidebar .playing .bottom i,
.container .sidebar .playing .bottom p{
    color: #919191;
}

.container main{
    padding: 20px 36px;
}

.container main header{
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.container main header .nav-links{
    display: flex;
    align-items: center;
    gap: 20px;
}

.container main header .nav-links a{
    text-transform: uppercase;
    color: #919191;
    transition: all 0.3s ease;
}

.container main header .search{
    display: flex;
    align-items: center;
    gap: 6px;
    width: 70%;
    background-color: #1d1d1d;
    border: 1px solid #464748;
    padding: 10px;
    border-radius: 8px;
}

.container main header .search input{
    width: 100%;
    background-color: transparent;
    border: none;
    outline: none;
    color: #fff;
}

.container main .trending{
    margin-top: 40px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    color: #fff;
}

.container main .trending .left .info{
    margin-top: 12px;
    padding: 26px;
}

.container main .trending .left .info h2{
    font-size: 56px;
    margin-bottom: 8px;
}

.container main .trending .left .info h4,
.container main .trending .left .info h5{
    display: inline;
}

.container main .trending .left .info h5{
    margin-left: 12px;
    color: #919191;
}

.container main .trending .left .info .buttons{
    margin-top: 30px;
    display: flex;
    align-items: center;
    gap: 16px;
}

.container main .trending .left .info .buttons button{
    padding: 12px 16px;
    background-color: #5773ff;
    border: none;
    border-radius: 14px;
    color: #fff;
    font-weight: bold;
    cursor: pointer;
}

.container main .trending .left .info .buttons i{
    color: #5773ff;
    font-size: 20px;
    border: 2px solid #fff;
    padding: 10px;
    border-radius: 50%;
}

.container main .trending img{
    width: 300px;
    height: 200px;
}

.container main .playlist{
    margin-top: 14px;
    display: flex;
    gap: 20px;
}

.container main .playlist .genres{
    color: #fff;
    background-color: #202026;
    padding: 20px;
    border-radius: 6px;
    width: 40%;
}

.container main .playlist .genres .header,
.container main .playlist .music-list .header{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 30px;
}

.container main .playlist .genres .header a,
.container main .playlist .music-list .header a{
    color: #919191;
    font-size: 12px;
}

.container main .playlist .genres .items{
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 10px;
}

.container main .playlist .genres .items .item{
    padding: 22px 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 6px;
    cursor: pointer;
}

.container main .playlist .genres .items .item p{
    font-size: 14px;
    font-weight: bold;
}

.container main .playlist .genres .items .item:nth-child(1){
    background-color: #476a8a;
}

.container main .playlist .genres .items .item:nth-child(2){
    background-color: #a69984;
}

.container main .playlist .genres .items .item:nth-child(3){
    background-color: #a24c34;
}

.container main .playlist .genres .items .item:nth-child(4){
    background-color: #0d4045;
}

.container main .playlist .genres .items .item:nth-child(5){
    background-color: #a67894;
}

.container main .playlist .genres .items .item:nth-child(6){
    background-color: #5547a5;
}

.container main .playlist .music-list{
    background-color: #202026;
    padding: 20px;
    color: #fff;
    border-radius: 6px;
    width: 65%;
}

.container main .playlist .music-list .items .item{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 20px;
}

.container main .playlist .music-list .items .item:last-child{
    margin-bottom: 0;
}

.container main .playlist .music-list .items .item .info,
.container main .playlist .music-list .items .item .actions{
    display: flex;
    align-items: center;
    gap: 20px;
}

.container main .playlist .music-list .items .item .info p{
    color: #919191;
    font-size: 12px;
    font-weight: bold;
    margin-top: 6px;
}

.container main .playlist .music-list .items .item .info img{
    width: 50px;
    height: 50px;
}

.container main .playlist .music-list .items .item .actions p{
    font-size: 13px;
    font-weight: bold;
}

.container main .playlist .music-list .items .item .actions .icon{
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #32323d;
    padding: 6px;
    border: 2px solid #464748;
    border-radius: 6px;
}

.container main .playlist .music-list .items .item .actions .icon i{
    font-size: 10px;
    color: #5773ff;
}

.container main .playlist .music-list .items .item .actions i{
    color: #919191;
}

.container .right-section{
    padding: 20px 36px 20px 0;
}

.container .right-section .profile{
    display: flex;
    align-items: center;
    justify-content: flex-end;
    gap: 18px;
    margin-bottom: 40px;
}

.container .right-section .profile .user{
    display: flex;
}

.container .right-section .profile .user .left{
    display: flex;
    align-items: center;
    background: #32323d;
    padding: 6px;
    border-radius: 6px 0 0 6px;
}

.container .right-section .profile .user .left img{
    width: 30px;
    height: 30px;
}

.container .right-section .profile .user .right{
    background-color: #25252d;
    border-radius: 0 6px 6px 0;
    padding: 13px;
    color: #fff;
}

.container .right-section .music-player{
    color: #fff;
    background-color: #202026;
    border-radius: 6px;
    height: 88%;
    display: flex;
    flex-direction: column;
}

.container .right-section .music-player .top-section{
    padding: 20px;
    height: 86%;
}

.container .right-section .music-player .header{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 30px;
}

.container .right-section .music-player .song-info{
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 24px;
    text-align: center;
}

.container .right-section .music-player .song-info img{
    width: 280px;
    height: 220px;
}

.container .right-section .music-player .description h3{
    font-size: 26px;
    font-weight: 500;
    margin-bottom: 8px;
}

.container .right-section .music-player .description h5{
    font-size: 16px;
    margin-bottom: 4px;
}

.container .right-section .music-player .description p{
    color: #919191;
    font-size: 12px;
    font-weight: bold;
}

.container .right-section .music-player .song-info .progress{
    display: flex;
    align-items: center;
    margin: 10px 0;
}

.container .right-section .music-player .song-info .progress p{
    font-size: 11px;
}

.container .right-section .music-player .song-info .progress .active-line{
    position: relative;
    width: 120px;
    height: 2px;
    background-color: #fff;
    margin-left: 30px;
}

.container .right-section .music-player .song-info .progress .deactive-line{
    width: 80px;
    height: 2px;
    background-color: #919191;
    margin-right: 30px;
}

.container .right-section .music-player .song-info .progress .active-line::before{
    content: "";
    background-color: #25252d;
    height: 10px;
    width: 10px;
    border: 2px solid #fff;
    position: absolute;
    top: -6px;
    left: 120px;
    border-radius: 50%;
}

.container .right-section .music-player .player-actions{
    background-color: #5773ff;
    height: 26%;
    border-radius: 6px;
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
}

.container .right-section .music-player .player-actions .buttons{
    display: flex;
    align-items: center;
    gap: 30px;
    margin-top: 24px;
}

.container .right-section .music-player .player-actions .buttons i{
    font-size: 20px;
}

.container .right-section .music-player .player-actions .buttons .play-button{
    padding: 16px;
    background-color: #fff;
    color: #5773ff;
    border-radius: 18px;
}

.container .right-section .music-player .player-actions .lyrics{
    display: flex;
    flex-direction: column;
    align-items: center;
    position: absolute;
    bottom: 8px;
}

.container main header .nav-links button,
.container .sidebar .logo button{
    display: none;
    align-items: center;
    justify-content: center;
    background-color: #1d1d1d;
    border: 1px solid #464748;
    font-size: 20px;
    padding: 4px;
    border-radius: 8px;
    cursor: pointer;
}

@media screen and (max-width: 1400px) {
    
    .container .sidebar .playing .bottom p{
        font-size: 10px;
    }

    .container main header .search{
        width: 50%;
    }

    .container main .trending .left .info h2{
        font-size: 36px;
    }

    .container main .trending img{
        width: 200px;
        height: 180px;
    }

    .container main .playlist .genres{
        width: 30%;
    }

    .container main .playlist .genres .items{
        grid-template-columns: 1fr;
    }

    .container main .playlist .genres .items .item{
        padding: 10px;
    }

    .container main .playlist .genres .items .item p{
        font-size: 12px;
    }

    .container main .playlist .genres .items .item:nth-child(6),
    .container main .playlist .music-list .items .item .info > p{
        display: none;
    }

}

@media screen and (max-width: 1200px) {
    
    .container main header .search{
        width: 40%;
    }

    .container main .trending .left .info h2{
        font-size: 24px;
    }

    .container main .trending .left .info h5{
        display: block;
        font-size: 12px;
        margin-left: 0;
    }

    .container main .trending .left .info .buttons button{
        padding: 10px 12px;
        font-size: 12px;
    }

    .container main .trending .left .info .buttons i{
        font-size: 14px;
    }

    .container main .playlist .genres{
        display: none;
    }

    .container main .playlist .music-list{
        width: 100%;
    }
    
    .container .right-section .music-player{
        height: 88%;
    }

    .container .right-section .music-player .song-info img{
        width: 220px;
        height: 220px;
    }

    .container .right-section .music-player .song-info .description h3{
        font-size: 22px;
    }

    .container .right-section .music-player .song-info .progress{
        margin: 0;
    }

    .container .right-section .music-player .song-info .progress .active-line{
        width: 80px;
    }

    .container .right-section .music-player .song-info .progress .deactive-line{
        width: 40px;
    }

    .container .right-section .music-player .song-info .progress .active-line::before{
        left: 80px;
    }

    .container .right-section .music-player .player-actions .buttons{
        margin-top: 30px;
    }

    .container .right-section .music-player .player-actions .buttons .play-button{
        padding: 10px;
        border-radius: 16px;
    }

}

@media screen and (max-width: 992px) {
    
    .container{
        grid-template-columns: 3fr 2fr;
    }

    .container .sidebar{
        position: absolute;
        left: -100%;
    }

    .container .sidebar .playing{
        display: none;
    }

    .container main header .nav-links a{
        font-size: 13px;
    }

    .container main header .search{
        width: 38px;
    }

    .container main header .search input{
        display: none;
    }

    .container main .trending img{
        width: 120px;
        height: 100px;
        margin-top: 66px;
    }

    .container main .playlist{
        margin-top: 40px;
    }
    
    .container .right-section .music-player{
        height: 87%;
    }

    .container .right-section .music-player .song-info img{
        width: 180px;
        height: 180px;
    }

    .container .right-section .music-player .player-actions .buttons{
        margin-top: 38px;
    }

    .container .right-section .music-player .player-actions .buttons i{
        font-size: 18px;
    }

    .container main header .nav-links button,
    .container .sidebar .logo button{
        display: flex;
    }

}

@media screen and (max-width: 768px) {
    
    .container{
        grid-template-columns: 1fr;
    }

    .container main .trending,
    .container main .playlist{
        display: none;
    }

    .container main header .search{
        width: 40%;
    }

    .container main header .search input{
        display: block;
    }

    .container .right-section{
        padding: 20px 36px;
    }

    .container .right-section .profile{
        justify-content: center;
        margin-bottom: 20px;
    }

    .container .right-section .music-player{
        height: 100%;
    }

    .container .right-section .music-player .song-info img{
        width: 300px;
        height: 190px;
    }

    .container .right-section .music-player .buttons i{
        font-size: 22px;
    }

}
</style>

        </div>
    </div>


    <script src="script.js"></script>
</body>

</html>

</body>
</html>