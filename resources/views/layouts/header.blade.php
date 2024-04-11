<div id="wrapper">
<nav class="navbar-primary navbar-static-side" role="navigation"> 
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                    <img alt="image" class="img-circle" src="{{ asset('img/profile_small.jpg')}}" />
                     </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David Williams</strong>
                     </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="mailbox.html">Mailbox</a></li>
                        <li class="divider"></li>
                        <li><a href="login.html">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li>
                <a href="{{ url('dashboard')}}"><i class="fa fa-home"></i> <span class="nav-label">Dashboard</span></a>
            </li>
            <li class="active">
                <a href="#"><i class="fa fa-building"></i> <span class="nav-label">Administration</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="active"><a href="{{ url('liste-eleve')}}">Elèves</a></li>
                    <li><a href="{{ url('liste-partenaire')}}">Partenaires</a></li>
                    <li><a href="{{ url('admin/admin/groupe')}}">Groupes de rentré</a></li>
                    <li><a href="{{ url('admin/admin/departement')}}">Departements</a></li>
                    <li><a href="{{ url('liste-niveau')}}">Niveaux</a></li>
                    <li><a href="{{ url('admin/admin/classe')}}">Classe</a></li>
                    <li><a href="{{ url('admin/admin/inscription')}}">inscription</a></li>
                </ul>
            </li>

            <li class="active">
                <a href=""><i class="fa fa-calendar"></i> <span class="nav-label">Emploi du Temps</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="active"><a href="{{ url('admin/emploidutemps/heure')}}">Reservation heure</a></li>
                    <li><a href="{{ url('admin/emploidutemps/salle')}}">Disponibilité Salle</a></li>
                    <li><a href="{{ url('admin/emploidutemps/cours')}}">Planification des Cours</a></li>
                </ul>
            </li>  

            <li class="active">
                <a href=""><i class="fa fa fa-book"></i> <span class="nav-label">Notes</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="active"><a href="{{ url('admin/note/note')}}">Reservation heure</a></li>
                </ul>
            </li>  

            <li>
                <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Gestion Suivi</span> <span class="fa arrow fa-arrow-right"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#"><i ></i> <span class="nav-label">Assiduité</span> <span class="fa arrow fa-arrow-right"></span></a>
                        <ul class="nav nav-third-level">
                            <li><a href="{{ url('admin/suivi/absence')}}">Absence</a></li>
                            <li><a href="{{ url('admin/suivi/retard')}}">Retard</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            
            <li>
                <a href="#"><i class="fa fa-cogs"></i> <span class="nav-label">Gestion des Pages</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ url('admin/page/accueil')}}">Accueil</a></li>
                    <li><a href="{{ url('admin/page/partenaire')}}">Partenaires</a></li>
                    <li><a href="{{ url('admin/page/etudiant')}}">Espace Étudiant</a></li>
                    <li><a href="{{ url('admin/page/professeur')}}">Espace Professeur</a></li>
                    <li><a href="{{ url('admin/page/administratif')}}">Espace Administratif</a></li>
                    <li><a href="{{ url('admin/page/annonce')}}">Espace Annonce</a></li>
                </ul>
            </li>
            
            <li>
                <a href="#"><i class="fa fa-file"></i> <span class="nav-label">Génération</span> <span class="fa arrow"></span></a>
                
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#"><i ></i> <span class="nav-label">Attestation</span> <span class="fa arrow fa-arrow-right"></span></a>
                        <ul class="nav nav-third-level">
                            <li><a href="{{ url('admin/generation/attestation/inscription')}}">Inscription</a></li>
                            <li><a href="{{ url('admin/generation/attestation/scolarite')}}">Scolarité</a></li>
                            <li><a href="{{ url('admin/generation/attestation/certificat')}}">Certificat</a></li>
                            <li><a href="{{ url('admin/generation/attestation/diplome')}}">Diplôme</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i ></i> <span class="nav-label">Releve de Paiement</span> <span class="fa arrow fa-arrow-right"></span></a>
                        <ul class="nav nav-third-level">
                            <li><a href="{{ url('admin/generation/paiement/inscription')}}">Inscription</a></li>
                            <li><a href="{{ url('admin/generation/paiement/mensualite')}}">Mensualité</a></li>
                            <li><a href="{{ url('admin/generation/paiement/periode')}}">Période</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i ></i> <span class="nav-label">Emploi du Temps</span> <span class="fa arrow fa-arrow-right"></span></a>
                        <ul class="nav nav-third-level">
                            <li><a href="{{ url('admin/generation/emploidutemps/professeur')}}">Professeur</a></li>
                            <li><a href="{{ url('admin/generation/emploidutemps/eleve')}}">Elève</a></li>
                        </ul>
                    </li>

                    <li><a href="{{ url('admin/generation/bulletin')}}">Bulletin</a></li> 
                </ul>
            </li>
             
            
            
           
        </ul>

    </div>
</nav>

<div id="page-wrapper" class="gray-bg dashbard-1">
<div class="row border-bottom">
<nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
<div class="navbar-header">
    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary btn-orange " href="#"><i class="fa fa-bars"></i> </a>
    <form role="search" class="navbar-form-custom" action="search_results.html">
        <div class="form-group">
            <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
        </div>
    </form>
</div>
    <ul class="nav navbar-top-links navbar-right">
        <li>
            <span class="m-r-sm text-muted welcome-message">Welcome to INSPINIA+ Admin Theme.</span>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
            </a>
            <ul class="dropdown-menu dropdown-messages">
                <li>
                    <div class="dropdown-messages-box">
                        <a href="profile.html" class="pull-left">
                            <img alt="image" class="img-circle" src="img/a7.jpg">
                        </a>
                        <div class="media-body">
                            <small class="pull-right">46h ago</small>
                            <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                            <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                        </div>
                    </div>
                </li>
                <li class="divider"></li>
                <li>
                    <div class="dropdown-messages-box">
                        <a href="profile.html" class="pull-left">
                            <img alt="image" class="img-circle" src="img/a4.jpg">
                        </a>
                        <div class="media-body ">
                            <small class="pull-right text-navy">5h ago</small>
                            <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                            <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                        </div>
                    </div>
                </li>
                <li class="divider"></li>
                <li>
                    <div class="dropdown-messages-box">
                        <a href="profile.html" class="pull-left">
                            <img alt="image" class="img-circle" src="img/profile.jpg">
                        </a>
                        <div class="media-body ">
                            <small class="pull-right">23h ago</small>
                            <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                            <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                        </div>
                    </div>
                </li>
                <li class="divider"></li>
                <li>
                    <div class="text-center link-block">
                        <a href="mailbox.html">
                            <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                        </a>
                    </div>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
            </a>
            <ul class="dropdown-menu dropdown-alerts">
                <li>
                    <a href="mailbox.html">
                        <div>
                            <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                            <span class="pull-right text-muted small">4 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="profile.html">
                        <div>
                            <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                            <span class="pull-right text-muted small">12 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="grid_options.html">
                        <div>
                            <i class="fa fa-upload fa-fw"></i> Server Rebooted
                            <span class="pull-right text-muted small">4 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <div class="text-center link-block">
                        <a href="notifications.html">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </li>
            </ul>
        </li>


        <li>
            <a href="login.html">
                <i class="fa fa-sign-out"></i> Log out
            </a>
        </li>
        <li>
            <a class="right-sidebar-toggle">
                <i class="fa fa-tasks"></i>
            </a>
        </li>
    </ul>

</nav>
</div>