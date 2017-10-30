<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Framavectoriel</title>
    <meta name="description" content="Framavectoriel permet de créer rapidement des images vectorielles au format SVG.">
    <meta name="author" content="Framasoft">

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/bootstrap/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/bootstrap/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/bootstrap/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/bootstrap/ico/apple-touch-icon-57-precomposed.png">
    <script src="/nav/lib/jquery/fquery.min.js" type="text/javascript"></script>
    <script src="/nav/lib/bootstrap/js/fbootstrap.min.js" type="text/javascript"></script>
    <link href="/nav/lib/bootstrap/css/bootstrap.min.css" media="all" rel="stylesheet">
    <link href="/nav/frama.css" media="all" rel="stylesheet">
    <style>
        body {
            background:#eee;
        }
        h1 {
            font-family: "DejaVu Sans",Verdana,Geneva,sans-serif !important;
            font-size: 48px;
            font-weight: bold;
        }
        .container.ombre {
            margin-top: 30px;
            margin-bottom: 30px;
            padding: 20px 30px;
        }
        #tuto-video p[role="presentation"] .glyphicon,
        #le-logiciel p[role="presentation"] .glyphicon,
        #jardin p[role="presentation"] .glyphicon {
            font-size:50px;
        }
    </style>

</head>

<body>
    <script src="/nav/nav.js" id="nav_js" type="text/javascript"></script>
    <div class="container ombre">
        <header role="banner">
            <h1><span class="frama">Frama</span><span class="services">vectoriel</span></h1>
            <hr class="trait" role="presentation" />
        </header>
        <main>
                <div class="row">
                    <div class="col-md-8">
                        <div class="text-center">
                            <p><a href="/svg-editor.html" role="button">
                                    <img src="/framavectoriel.jpg" alt="" class="img-responsive center-block" style="width:85%"/><br />
                                    <span class="btn btn-primary btn-lg"><span class="fa fa-fw fa-paint-brush"></span>Créer une image</span>
                            </a></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h2>Qu’est ce que Framavectoriel ?</h2>
                        <p>Framavectoriel permet de créer rapidement des <a href="http://fr.wikipedia.org/wiki/Image_vectorielle">images vectorielles</a> au format <abbr title="Scalable Vector Graphics">SVG</abbr>.</p>

                        <h2>Pourquoi l’utiliser ?</h2>
                        <ul>
                            <li>Utilisable en ligne, sans installation</li>
                            <li>Pas d'inscription requise</li>
                            <li>Possibilité d'exporter votre document sous forme d'image bitmap ou vectorielle</li>
                            <li>Logiciel libre et gratuit, ouvert à tous</li>
                            <li>Éthique : aucune conservation de vos données</li>
                        </ul>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-md-4" id="tuto-video">
                        <h2>Tutoriel vidéo</h2>
                        <p class="text-center" role="presentation"><span class="glyphicon glyphicon-film"></span></p>
                        <p>Pour vous aider dans l'utilisation du logiciel, voici un tutoriel vidéo réalisé par l’un de ses développeurs, Jeff Schiller. <small>(Pour l'instant la vidéo est en anglais. Désolé.)</small></p>
                        <p class="text-center"><a href="#TutoVideo" data-toggle="modal" class="btn btn-info">Lire la vidéo »</a></p>
                    </div>

                    <!-- modale vidéo -->
                    <div class="modal fade" id="TutoVideo" tabindex="-1" role="dialog" aria-labelledby="TutoVideoLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Fermer</span></button>
                                    <h1 id="TutoVideoLabel">Tutoriel vidéo</h1>
                                </div>
                                <div class="modal-body">
                                    <video controls="controls" preload="none" width="420" height="460" poster="http://www.framatube.org/images/media/864l.jpg">
                                        <source src="http://www.framatube.org/files/1227-introduction-a-svg-editjpg.mp4" type="video/mp4"></source>
                                        <source src="http://www.framatube.org/files/1228-introduction-a-svg-editjpg.webm" type="video/webm"></source>
                                    </video>
                                    <p>-> La <a href="http://www.framatube.org/files/1228-introduction-a-svg-editjpg.webm">vidéo</a> au format webm</p>
                               </div>
                               <div class="modal-footer"><a href="#" class="btn btn-default" data-dismiss="modal">Fermer</a></div>
                           </div>
                        </div>
                    </div>
                    <!-- /modale vidéo -->

                    <div class="col-md-4" id="le-logiciel">
                        <h2>Le logiciel</h2>
                        <p class="text-center" role="presentation"><span class="glyphicon glyphicon-cloud"></span></p>
                        <p>Framavectoriel repose sur le logiciel libre <a href="https://github.com/SVG-Edit/svgedit"><abbr>SVG</abbr>-<span lang="en">Edit</span></a>.</p>
                        <p>Il s'agit d’<a href="https://code.google.com/p/svg-edit/wiki/ProjectsThatUseSvgEdit">une instance parmi d'autres</a>.</p>
                        <p><abbr>SVG</abbr>-<span lang="en">Edit</span> est sous <a href="https://creativecommons.org/licenses/by-sa/3.0/deed.fr">licence <span lang="en">Creative Commons</span> 3.0 <span lang="en">By</span>-<abbr>SA</abbr></a>.</p>
                        <p>Ce logiciel requiert l’activation du javascript et des cookies. Il est compatible avec les navigateurs web suivants :</p>
                        <ul>
                            <li>Firefox 1.5+</li>
                            <li>Google Chrome 1+</li>
                            <li>Safari 4+</li>
                            <li>Opera 9.50+</li>
                            <li>Microsoft Internet Explorer 8+</li>
                        </ul>
                    </div>

                    <div class="col-md-4" id="jardin">
                        <h2>Cultivez votre jardin</h2>
                        <p class="text-center" role="presentation"><span class="glyphicon glyphicon-tree-deciduous"></span></p>
                        <p>Pour participer au développement du logiciel, proposer des améliorations
                            ou simplement le télécharger, rendez-vous sur <a href="https://github.com/SVG-Edit/svgedit">le site de développement</a>.</p>
                        <br>
                        <p>Si vous souhaitez installer ce logiciel pour votre propre usage et ainsi gagner en autonomie, nous vous aidons sur :</p>
                        <p class="text-center"><a href="http://framacloud.org/cultiver-son-jardin/installation-de-svg-edit" class="btn btn-success"><span class="glyphicon glyphicon-tree-deciduous"></span> framacloud.org</a></p>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
