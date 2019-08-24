<?php

use \yii\web\View;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\assets\TalentProfileAsset;

TalentProfileAsset::register($this);


?>

<!---Section Begin--->
<section>
    <div class="row sectionMainBar">
        <div class="col-md-2">
            <div class="leftSidbar">
                <div class="row">
                    <div class="col-md-6">
                        <div class="profilInfoImage">
                            <img src="img/profileDefaultSmall.png">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profilInfoName">
                            <span class="frstName">David</span>
                            <span class="lastName">Yan</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <nav class="nav flex-column leftBarProfileNavi">
                            <a class="nav-link active" href="#">
                                <img src="img/Home_icon.png" alt="home icon">
                                <span>Home</span>
                            </a>
                            <a class="nav-link" href="#">
                                <img src="img/Contacts_icon.png" alt="contact icon"> 
                                <span>Contacts</span>
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-10">
<!--Top Profile Block begin-->
            <div class="row">
                <div class="col-md-12">
                    <div class="profileHeadBlock">
                        <div class="profileTimelineBackground">
                        </div>
                        <div class="topProfileInfoMain">
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="profileImage">
                                        <img src="img/defaultManPictureBig.png">
                                    </div>
                                    <div class="userInfoTexts">
                                        <span class="userNameTextSpan userMainInfoTextSpan">David Yan</span>
                                        <span class="userPositionTextSpan userMainInfoTextSpan userProfileAditionalInfo">Position</span>
                                        <span class="userBirthdayTextSpan userMainInfoTextSpan userProfileAditionalInfo">Birthday</span>
                                        <span class="userLocationTextSpan userMainInfoTextSpan userProfileAditionalInfo">Location</span>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <button class="btn btn-info settingsToolButtonProfileRight">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!--Top Profile Block end-->
<!--Tab Menu Block Begin-->
            <div class="row">
                <div class="col-md-12">
                    <div class="tabMenuBlock">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item active">
                                <a class="nav-link talentsProfileTabNavigation" 
                                   id="pills-profileDetails-tab" 
                                   data-toggle="pill" 
                                   data-controller="default"
                                   href="#pills-profileDetails" 
                                   role="tab" 
                                   aria-controls="pills-profileDetails" 
                                   aria-selected="true"><?=Yii::t('talents_tab_menu','Profile details')?></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link talentsProfileTabNavigation" 
                                 id="pills-projects-tab" 
                                 data-toggle="pill" 
                                 data-controller="talents-projects"
                                 href="#pills-projects" 
                                 role="tab" 
                                 aria-controls="pills-projects" 
                                 aria-selected="false"><?=Yii::t('talents_tab_menu','Projects')?></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link talentsProfileTabNavigation" 
                                 id="pills-activity-tab" 
                                 data-toggle="pill" 
                                 href="#pills-activity" 
                                 data-controller="activity"
                                 role="tab" 
                                 aria-controls="pills-activity" 
                                 aria-selected="false">Activity</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link talentsProfileTabNavigation" 
                                 id="pills-createCV-tab" 
                                 data-toggle="pill" 
                                 data-controller="create-cv"
                                 href="#pills-createCV" 
                                 role="tab" 
                                 aria-controls="pills-createCV" 
                                 aria-selected="false">Create CV</a>
                            </li>
                        </ul>
                        <div class="tab-content profileOptionLists" id="pills-tabContent">

                            <div class="tab-pane fade active in" 
                                 id="pills-profileDetails" 
                                 role="tabpanel" 
                                 aria-labelledby="pills-profileDetails-tab"
                                 >
<!--Profile details begin---->
                                <div id="profile-details" class="row dragableArea">
                                    <div class="col-md-6">
                                        <div class="profile-details-left row"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="profile-details-right row"></div>
                                    </div>
                                </div>
                                <div class="tabFooterButtonLayer">
                                    <button class="visiblitySettings">Visibility Settings</button>
                                </div>
<!--Profile details end---->
                            </div>
                            <div class="tab-pane fade" 
                                 id="pills-projects" 
                                 role="tabpanel" 
                                 aria-labelledby="pills-projects-tab">
                                
                                <div class="row">
                                    <div id="projects-block" class="col-md-12">
                                        <div class="projects-block-add">
                                            <button class="btn add-project">Add New Projects</button>
                                            <div class="text-center projects-empty">
                                                <p>Your Projecte page is currently empty</p>
                                                <p>Create your portfolio by clicking the Add New Porject Button</p>
                                            </div>
                                        </div>
                                        <div class="row add-project-form">
                                            <form action="#" method="post">
                                                <div class="col-md-4 form-group clearfix">
                                                    <label>Title</label>
                                                    <input type="text" class="form-control" name="NewProject[title]" placeholder="Project 1">
                                                </div>
                                                <div class="col-md-3 col-md-offset-2 form-group clearfix ">
                                                    <label>View</label>
                                                    <select class="form-control" name="NewProject[view]">
                                                        <option value="Public">Public</option>
                                                        <option value="friends_only">Friends only</option>
                                                        <option value="only_me">Only me</option>
                                                    </select>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="form-group col-md-10">
                                                    <label>Description</label>
                                                    <textarea name="companyData[description]" class="form-control"  rows="5" placeholder="Add a description for your project here"></textarea>
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <input type="file" class="form-control" name="NewProject[files]" />
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-md-12 project-video-url form-group">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label>Video Url</label>
                                                            <span class="video-url-value"></span>
                                                        </div>
                                                        <div class="col-md-4 pr-0">
                                                            <input type="text" class="form-control" name="NewProject[video_url]" placeholder="Add your video url here">
                                                        </div>
                                                        <div class="col-md-2">
                                                            <button type="button" class="form-control btn">Add</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>

                                                <div id="project-update-section">
                                                    <input type="reset" value="Cancel">
                                                    <input type="submit" value="Save">
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" 
                                 id="pills-activity" 
                                 role="tabpanel" 
                                 aria-labelledby="pills-activity-tab">
                                Activity
                            </div>
                            <div class="tab-pane fade" 
                                 id="pills-createCV" 
                                 role="tabpanel" 
                                 aria-labelledby="pills-createCV-tab">
                                <div class="row">
                                    <div id="cv-details" class="col-md-12">
                                        <h4 class="col-md-12">Select a Resume style of your preference</h4>
                                        <div class="col-md-3 active" data-toggle="modal" data-target="#resumeModal">
                                            <div class="cv-item" data-resume-id="1">
                                                <img src="img/talents-cvs/resume-1.png" alt="Resume 1" />
                                            </div>
                                            <p>Resume 1</p>
                                        </div>
                                        <div class="col-md-3" data-toggle="modal" data-target="#resumeModal">
                                            <div class="cv-item" data-resume-id="2">
                                                <img src="img/talents-cvs/resume-1-1.png" alt="Resume 2" />
                                            </div>
                                            <p>Resume 2</p>
                                        </div>
                                        <div class="col-md-3" data-toggle="modal" data-target="#resumeModal">
                                            <div class="cv-item" data-resume-id="3">
                                                <img src="img/talents-cvs/resume-3.png" alt="Resume 3" />
                                            </div>
                                            <p>Resume 3</p>
                                        </div>
                                        <div class="col-md-3" data-toggle="modal" data-target="#resumeModal">
                                            <div class="cv-item" data-resume-id="4">
                                                <img src="img/talents-cvs/resume-4.png" alt="Resume 4" />
                                            </div>
                                            <p>Resume 4</p>
                                        </div>


                                        <!-- Recently created cvs -->

                                        <div class="col-md-12 clearfix dashed-hr"></div>
                                        <h4 class="col-md-12">Recently created cv</h4>
                                        <div class="col-md-3 active">
                                            <div class="cv-item" data-resume-id="1">
                                                <img src="img/talents-cvs/resume-1.png" alt="Resume 1" />
                                            </div>
                                            <p>Resume 1</p>
                                        </div>
                                        <div class="col-md-12 text-right creat-cv-btn">
                                            <button class="btn">Crate CV</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
<!--Tab Menu Block End-->
        </div>
    </div>
</section>
<!---Section End--->
<div class="modal fade" id="resumeModal" tabindex="-1" role="dialog" aria-labelledby="resumeModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
      </div>
    </div>
  </div>
</div>