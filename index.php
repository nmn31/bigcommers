<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
    <script src="apiai-javascript-client/target/ApiAi.js"></script>
    <script src="demoFunctions.js"></script>

    <style>

            .chat-header .fa.fa-close{
                position: absolute;
                right: 28px;
                font-size: 20px;
                top: 9px;
                cursor: pointer;
            }
            .chat-btn{
                position: fixed;
                right: 25px;
                top: 60px;
                cursor: pointer;
            }

            .chat-btn > div, .chat-left {
                position: relative;
            }

            .chat-btn > div > span, .chat-left > span{
                position: absolute;
                top: 10px;
                left: 7px;
                color: #FFF;
                font-size: 12px;
            }


            .chat-left > span{
                position: absolute;
                top: 15px;
                left: 12px;
                color: #FFF;
                font-size: 12px;
            }

            .chat-box{
                position: fixed;
                top: 0;
                right: 0;
                width: 300px;
                height: 350px;
                border: 1px solid #8e8e8e;
                overflow: hidden;
                box-shadow: 0px 0px 10px #555;
                display: none;
                z-index: 999;
                background: #FFF;
            }
            .chat-box .chat-header{
                width:100%;
                padding: 10px;
                border-bottom: 1px solid #8e8e8e;
                position: relative;
            }
            .chat-box .chat-body{
                overflow-y: auto;
                height: 275px;
            }
            .chat-box .chat-footer{
                width:100%;
                padding: 2px;
                border-top: 1px solid #8e8e8e;
                position: absolute;
                bottom: 0px;
                left:0px;
                background: #fff;
            }
            .chat-box input{
                border: none;
                width: 100%;
                height: 30px;
            }
            .chat-left{
                float: left;

                padding: 5px;
            }
            .chat-right{
                margin-left: 50px;

            }
            .chat-right ul{
                list-style-type: none;
                margin-right:15px;
            }
            .chat-right ul li{
                border: 1px solid #666;
                margin: 8px 0;
                padding: 4px 5px;
                border-radius: 5px;
                box-shadow: 0px 0px 5px #ccc;
                overflow: hidden;
                font-size: 14px;
            }

            .chat-right ul li:hover{
                cursor: pointer;
                background: #e5e5e5;
            }
            .chat-right ul li.active{
                background-color: #ccc;
            }

            .chat-right.sub{
                display: none;
            }

            #map{
                width:100%;
                height:100px;
            }
            .social{
                display: none;
            }
            .social ul{
                margin: 0px;
            }
            .social ul li{
                position: relative;
            }
            .social, .social ul li, .social ul{
                box-shadow: none !important;
                border: none !important;
            }
            li.social:hover{
                background-color: none;
            }
            .social .fa{
                color: #2196F3;
                font-size: 28px;
                display: inline-block;
                position: absolute;
                top: 8px;
            }
            .social span{
                display: block;
                padding-left: 35px;
            }
            .remove-border{
                border: none !important;
                box-shadow: none !important;
            }
        #placeholder {
            text-align: center;
            margin-top: 1.5em;
        }
        #main-wrapper {
            display: none;
        }
        .clearfix {
            clear: both;
        }
    </style>
</head>
<body>

  <div class="chat-box" style="display: block;">
            <div class="chat-header">
                <span><b>Robot du Grand Palais</b></span>
                <i class="fa fa-close fa-2x"></i>
            </div>

            <div class="chat-body">
                <div class="chat-left">
                    <i class="fa fa-comment fa-3x"></i><span>Aide</span>
                </div>
                <div class="chat-right main">
                  <div id="result">
                      <!--div class="left-align flow-text">test</div>
                      <div class="right-align flow-text">one more test</div-->
                  </div>
                </div>

                <div class="chat-right sub" style="display: none;">
                    <ul>
                        <li class="user_type">Je vous écoute. Je repondrai au mieux de mes connaissances de robot. Si je n'ai pas la réponse a votre question, je la transmettrai à l'un de mes collègues.</li>
                        <li class="click-map-content">
                            <div>
                                M. Untel présentera le cours sur l'histoire de l'art de l'Antiquité et de la Mésopotamie le vendredi 23 septembre à 19h30 et le samedi 24 septembre à 19h30, à l'adresse suivante:
                            </div>
                            <div id="map"></div>
                        </li>
                        <li class="click-pdf-content">
                            Voici les détails du programme des cours d'histoire de l'art:
                        </li>
                        <li class="click-pdf-content remove-border">
                            <a href="http://www.grandpalais.fr/pdf/programme_histoire-art-details.pdf" target="_blank"><i class="fa fa-file-pdf-o" style="font-size:40px"></i></a>
                        </li>
                        <li class="social" style="display: list-item;">
                            <ul>
                                <li><i class="fa fa-facebook-official"></i><span>Posez-nous vos questions sur Facebook</span></li>
                                <li><i class="fa fa-comment"></i> <span>Posez-nous vos questions sur Messenger</span></li>
                                <li><i class="fa fa-twitter-square"></i> <span>Posez-nous vos questions sur Twitter</span></li>
                                <li><i class="fa fa-phone"></i> <span>Appelez-nous</span></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="chat-footer">
                <input type="text" id="q" name="msg" placeholder="Saisissez votre message..">
            </div>
        </div>

<script defer src="layout.js"></script>

</body>
</html>
