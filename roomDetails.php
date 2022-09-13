<!DOCTYPE html>
<html lang="en">


<!-- These are dynamic variables -->

<?php  $page_title="About Rooms that what do you want";?>
<?php  $description = "Life style vacation club"; ?> 

<!-- End -->


<?php include "./includes/header.php";?>
<style>

    .headerTop{
        background: #dee2e6;
    }
    .headerTop .navbar .collapse ul li a {
        color: black;
    }
</style>

<section class="">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-md-12 roomDeatilsCol">
                <div class="titles">
                    <div class="roomTitles titleOne">
                        <h6 class="innerTitle">For rent</h6>
                    </div>
                    <div class="roomTitles titleTwo">
                        <h6 class="innerTitle">New - 1 day ago</h6>
                    </div>
                    <div class="roomTitles titleThree">
                        <h6 class="innerTitle">pet friendly</h6>
                    </div>
                </div>
                <div class="saveShare">
                    <h6 class="saveShareicons">
                        <img src="./assets/images/icons/heart.avi" alt="">
                        <a href="">Save</a>
                    </h6>
                    <h6 class="saveShareicons">
                        <img src="./assets/images/icons/share.avi" alt="">
                        <a href="">Share</a>
                    </h6>
                </div>
                <div class="roomZoom show-modal" data-toggle="modal" data-target="#myModal">
                    <div class="roomsDetailsBox">
                        <div class="bigImg">
                            
                            <img src="./assets/images/rooms/bigImage01.webp" alt="" class="bigImage img-fluid">
                        </div>
                        <div class="smallImg">
                            <img src="./assets/images/rooms/smallImage01.webp" alt="" class="smallImage img-fluid">
                            <img src="./assets/images/rooms/smallImage02.webp" alt="" class="smallImage img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-xl-7 col-lg-8">

                <div class="roomInfo">
                    <div class="romInnerInfo">
                        <h5>11515 N 91st St #152</h5>

                        <h6 class="romInnerFlex">
                            <span>puerto plate, AZ 85260</span>
                            <a href="">puerto plate</a>
                        </h6>

                        <h6 class="romInnerFlex">
                            <div class="innerIcons">
                                <img src="./assets/images/icons/beds.webp" alt="">
                                <span>2 Beds</span>
                            </div>
                            <div class="innerIcons">
                                <img src="./assets/images/icons/baths.avi" alt="">
                                <span>2 Baths</span>
                            </div>
                            <div class="innerIcons">
                                <img src="./assets/images/icons/triangle.avi" alt="">
                                <span>1078, puerto plate</span>
                            </div>
                        </h6>
                    </div>
                    <div class="applyBox">
                        <h6 class="pricePerMon">$2, 100/mo</h6>
                        <span>Taking Application</span>
                        <button class="applyBtn">Apply Now</button>
                    </div>
                </div>

                <div class="tab mapsInfo" role="tabpanel">
                    <h4 class="mapLocal">Local Information</h4>
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation"><a class="active"  href="#Section1" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="false">Maps</a></li>
                        <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false">Schools</a></li>
                        <li role="presentation"><a href="#Section3" aria-controls="messages" role="tab" data-toggle="tab" aria-expanded="false">Shop & eat</a></li>
                    </ul>
                    <div class="tab-content tabs">
                        <div role="tabpanel" class="tab-pane fade active in" id="Section1">
                            <div class="googleMaps">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d187673.30870104616!2d23.183861007388955!3d42.69534680097388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40aa8682cb317bf5%3A0x400a01269bf5e60!2sSofia%2C+Bulgaria!5e0!3m2!1sit!2sit!4v1564566816950!5m2!1sit!2sit" allowfullscreen=""></iframe>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="Section2">
                            <div class="googleMaps">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d187673.30870104616!2d23.183861007388955!3d42.69534680097388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40aa8682cb317bf5%3A0x400a01269bf5e60!2sSofia%2C+Bulgaria!5e0!3m2!1sit!2sit!4v1564566816950!5m2!1sit!2sit" allowfullscreen=""></iframe>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="Section3">
                            <div class="googleMaps">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d187673.30870104616!2d23.183861007388955!3d42.69534680097388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40aa8682cb317bf5%3A0x400a01269bf5e60!2sSofia%2C+Bulgaria!5e0!3m2!1sit!2sit!4v1564566816950!5m2!1sit!2sit" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="desBox">
                    <h4 class="desHead">Description</h4>
                    <a href="tel:(123) 456-78910" class="desPhone">(123) 456-78910</a>
                    <p class="desExplaine">
                        2 bedroom/2 bedroom direct access one car garage ground floor condo in North Scottsdale. Corner unit backing to the pool. Brand new air conditioning and in unit washer and dryer. Beautiful porcelain wood floors. Bathrooms updated. Available October 15th for move in.
                        <br><br>
                        Tenant will be responsible for paying all utilities. No smoking allowed. Pets ok with landlord agreement. Parking in the garage and driveway only. Annual lease only. Unfurnished.
                    </p>
                </div>

            </div>
            <div class="col-xl-3 col-lg-4">
                <div class="bookinBox">
                    <h6 class="">Contact This Property</h6>
                    <h5 class="">Property Manager</h5>
                    <a href="tel:(123) 456-78910">(123) 456-78910</a>
                    
                    <form action="" class="mt-5">
                        <div class="form-group formFlex">
                            <input type="text" class="form-control" id="" placeholder="First Name" required>
                            <input type="text" class="form-control" id="" placeholder="Last Name" required>
                        </div>
                        <div class="form-group formFlex mt-3">
                            <input type="Email" class="form-control" id="" placeholder="Email Address" required>
                        </div>
                        <div class="form-group formFlex mt-3">
                            <textarea class="form-control"  rows="3" placeholder="">
                            </textarea>
                        </div>
                        <div class="form-check mt-3 checkBox">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked>
                            <label class="form-check-label labels" for="defaultCheck1">
                                Enable 1-click request
                            </label>
                        </div>
                        <a href="" class="availBtn">Check Availability</a>
                        <p class="policyTxt">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati praesentium possimus repudiandae repellat fuga placeat ipsam hic vel id cumque.
                        </p>
                    </form>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-4">
            <div class="col-10 colHighlights">
                <div class="homeHighlights">
                    <h5 class="highlightsHead">Home Highlights</h5>
                    <div class="flexHighlights">
                        <div class="innerhlights">
                            <h6>
                                <img src="./assets/images/icons/pets.avi" alt="">
                                <span>Pets</span>
                            </h6>
                            <h6>
                                <img src="./assets/images/icons/parking.avi" alt="">
                                <span>Parking</span>
                            </h6>
                            <h6>
                                <img src="./assets/images/icons/outdoor.avi" alt="">
                                <span>Outdoor</span>
                            </h6>
                        </div>
                        <div class="innerhlights scdHlights">
                            <h6><span>Dogs & Cats</span></h6>
                            <h6><span>Garage</span></h6>
                            <h6><span>Pool</span></h6>
                        </div>
                        <div class="innerhlights">
                            <h6>
                                <img src="./assets/images/icons/ac.avi" alt="">
                                <span>A / C</span>
                            </h6>
                            <h6>
                                <img src="./assets/images/icons/homeUtilities.avi" alt="">
                                <span>Utilities Included</span>
                            </h6>
                            <h6>
                                <img src="./assets/images/icons/listed.avi" alt="">
                                <span>Listed</span>
                            </h6>
                        </div>
                        <div class="innerhlights scdHlights">
                            <h6><span>Headting & Cooling</span></h6>
                            <h6><span>Contact Manager</span></h6>
                            <h6><span>Contact Manager</span></h6>
                        </div>
                    </div>
                </div>
                <div class="interiorBox">
                    <h5 class="interiorTopHead">
                        <img src="./assets/images/icons/interior.avi" alt="">
                        <span>Interior Features</span>
                    </h5>
                   <table class="interiorTable">
                    <tbody>
                        <tr>
                           <td>
                             <h4 class="">Heating & Cooling</h4>
                            <div class="upBox">
                                <li>Heating: Forced Air</li>
                                <li>Air Conditioning</li>
                            </div>
                           </td>
                        </tr>
                        <tr>
                           <td>
                             <h4 class="">Appliances & Utilities</h4>
                            <div class="upBox">
                                <li>Dishwasher</li>
                                <li>Dryer</li>
                                <li>Washer</li>
                            </div>
                           </td>
                        </tr>
                        <tr>
                           <td>
                             <h4 class="">Levels, Entrance, & Accessibility</h4>
                            <div class="upBox">
                                <li>Floor: Tile Carpet</li>
                            </div>
                           </td>
                        </tr>
                    </tbody>
                   </table>
                   <a class="seeAllBtn">See All</a>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-10 colSlider">
               <div class="roomCardSlider">
                    <div class="roomsCard">
                        <a href="">
                            <div class="displayBox">
                                <span>New - 21 min ago</span>
                            </div>
                            <div class="heartBox">
                                <img src="./assets/images/icons/heart.avi" alt="">
                            </div>
                            <img src="./assets/images/rooms.webp" alt="" class="img-fluid roomsImg">
                            <div class="innerRooms">
                                <h4>$1,750/mo</h4>
                                <div class="iconFlex">
                                    <h5>
                                        <img src="./assets/images/beds.webp" alt="" class="img-fluid iconsRoom">
                                        <span class="roomNumber">2</span>
                                        <span class="guestHead">Double Beds</span>
                                    </h5>
                                    <h5>
                                        <img src="./assets/images/users.webp" alt="" class="img-fluid iconsRoom">
                                        <span class="roomNumber">2</span>
                                        <span class="guestHead">Guests</span>
                                    </h5>

                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Earum molestias modi possimus reiciendis quaerat quia accusantium dolores dolorem ex 
                                    rerum minima nihil harum repellendus cupiditate pariatur, itaque fugit a autem.
                                </p>
                                <a href="">Book Now <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
                            </div>
                        </a>
                    </div>
                    <div class="roomsCard">
                        <a href="">
                            <div class="displayBox">
                                <span>New - 21 min ago</span>
                            </div>
                            <div class="heartBox">
                                <img src="./assets/images/icons/heart.avi" alt="">
                            </div>
                            <img src="./assets/images/rooms.webp" alt="" class="img-fluid roomsImg">
                            <div class="innerRooms">
                                <h4>$1,750/mo</h4>
                                <div class="iconFlex">
                                    <h5>
                                        <img src="./assets/images/beds.webp" alt="" class="img-fluid iconsRoom">
                                        <span class="roomNumber">2</span>
                                        <span class="guestHead">Double Beds</span>
                                    </h5>
                                    <h5>
                                        <img src="./assets/images/users.webp" alt="" class="img-fluid iconsRoom">
                                        <span class="roomNumber">2</span>
                                        <span class="guestHead">Guests</span>
                                    </h5>

                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Earum molestias modi possimus reiciendis quaerat quia accusantium dolores dolorem ex 
                                    rerum minima nihil harum repellendus cupiditate pariatur, itaque fugit a autem.
                                </p>
                                <a href="">Book Now <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
                            </div>
                        </a>
                    </div>
                    <div class="roomsCard">
                        <a href="">
                            <div class="displayBox">
                                <span>New - 21 min ago</span>
                            </div>
                            <div class="heartBox">
                                <img src="./assets/images/icons/heart.avi" alt="">
                            </div>
                            <img src="./assets/images/rooms.webp" alt="" class="img-fluid roomsImg">
                            <div class="innerRooms">
                                <h4>$1,750/mo</h4>
                                <div class="iconFlex">
                                    <h5>
                                        <img src="./assets/images/beds.webp" alt="" class="img-fluid iconsRoom">
                                        <span class="roomNumber">2</span>
                                        <span class="guestHead">Double Beds</span>
                                    </h5>
                                    <h5>
                                        <img src="./assets/images/users.webp" alt="" class="img-fluid iconsRoom">
                                        <span class="roomNumber">2</span>
                                        <span class="guestHead">Guests</span>
                                    </h5>

                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Earum molestias modi possimus reiciendis quaerat quia accusantium dolores dolorem ex 
                                    rerum minima nihil harum repellendus cupiditate pariatur, itaque fugit a autem.
                                </p>
                                <a href="">Book Now <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
                            </div>
                        </a>
                    </div>
                    <div class="roomsCard">
                        <a href="">
                            <div class="displayBox">
                                <span>New - 21 min ago</span>
                            </div>
                            <div class="heartBox">
                                <img src="./assets/images/icons/heart.avi" alt="">
                            </div>
                            <img src="./assets/images/rooms.webp" alt="" class="img-fluid roomsImg">
                            <div class="innerRooms">
                                <h4>$1,750/mo</h4>
                                <div class="iconFlex">
                                    <h5>
                                        <img src="./assets/images/beds.webp" alt="" class="img-fluid iconsRoom">
                                        <span class="roomNumber">2</span>
                                        <span class="guestHead">Double Beds</span>
                                    </h5>
                                    <h5>
                                        <img src="./assets/images/users.webp" alt="" class="img-fluid iconsRoom">
                                        <span class="roomNumber">2</span>
                                        <span class="guestHead">Guests</span>
                                    </h5>

                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Earum molestias modi possimus reiciendis quaerat quia accusantium dolores dolorem ex 
                                    rerum minima nihil harum repellendus cupiditate pariatur, itaque fugit a autem.
                                </p>
                                <a href="">Book Now <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
                            </div>
                        </a>
                    </div>
                    <div class="roomsCard">
                        <a href="">
                            <div class="displayBox">
                                <span>New - 21 min ago</span>
                            </div>
                            <div class="heartBox">
                                <img src="./assets/images/icons/heart.avi" alt="">
                            </div>
                            <img src="./assets/images/rooms.webp" alt="" class="img-fluid roomsImg">
                            <div class="innerRooms">
                                <h4>$1,750/mo</h4>
                                <div class="iconFlex">
                                    <h5>
                                        <img src="./assets/images/beds.webp" alt="" class="img-fluid iconsRoom">
                                        <span class="roomNumber">2</span>
                                        <span class="guestHead">Double Beds</span>
                                    </h5>
                                    <h5>
                                        <img src="./assets/images/users.webp" alt="" class="img-fluid iconsRoom">
                                        <span class="roomNumber">2</span>
                                        <span class="guestHead">Guests</span>
                                    </h5>

                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Earum molestias modi possimus reiciendis quaerat quia accusantium dolores dolorem ex 
                                    rerum minima nihil harum repellendus cupiditate pariatur, itaque fugit a autem.
                                </p>
                                <a href="">Book Now <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
                            </div>
                        </a>
                    </div>
                    <div class="roomsCard">
                        <a href="">
                            <div class="displayBox">
                                <span>New - 21 min ago</span>
                            </div>
                            <div class="heartBox">
                                <img src="./assets/images/icons/heart.avi" alt="">
                            </div>
                            <img src="./assets/images/rooms.webp" alt="" class="img-fluid roomsImg">
                            <div class="innerRooms">
                                <h4>$1,750/mo</h4>
                                <div class="iconFlex">
                                    <h5>
                                        <img src="./assets/images/beds.webp" alt="" class="img-fluid iconsRoom">
                                        <span class="roomNumber">2</span>
                                        <span class="guestHead">Double Beds</span>
                                    </h5>
                                    <h5>
                                        <img src="./assets/images/users.webp" alt="" class="img-fluid iconsRoom">
                                        <span class="roomNumber">2</span>
                                        <span class="guestHead">Guests</span>
                                    </h5>

                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Earum molestias modi possimus reiciendis quaerat quia accusantium dolores dolorem ex 
                                    rerum minima nihil harum repellendus cupiditate pariatur, itaque fugit a autem.
                                </p>
                                <a href="">Book Now <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
                            </div>
                        </a>
                    </div>
                    <div class="roomsCard">
                        <a href="">
                            <div class="displayBox">
                                <span>New - 21 min ago</span>
                            </div>
                            <div class="heartBox">
                                <img src="./assets/images/icons/heart.avi" alt="">
                            </div>
                            <img src="./assets/images/rooms.webp" alt="" class="img-fluid roomsImg">
                            <div class="innerRooms">
                                <h4>$1,750/mo</h4>
                                <div class="iconFlex">
                                    <h5>
                                        <img src="./assets/images/beds.webp" alt="" class="img-fluid iconsRoom">
                                        <span class="roomNumber">2</span>
                                        <span class="guestHead">Double Beds</span>
                                    </h5>
                                    <h5>
                                        <img src="./assets/images/users.webp" alt="" class="img-fluid iconsRoom">
                                        <span class="roomNumber">2</span>
                                        <span class="guestHead">Guests</span>
                                    </h5>

                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Earum molestias modi possimus reiciendis quaerat quia accusantium dolores dolorem ex 
                                    rerum minima nihil harum repellendus cupiditate pariatur, itaque fugit a autem.
                                </p>
                                <a href="">Book Now <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
                            </div>
                        </a>
                    </div>
                    <div class="roomsCard">
                        <a href="">
                            <div class="displayBox">
                                <span>New - 21 min ago</span>
                            </div>
                            <div class="heartBox">
                                <img src="./assets/images/icons/heart.avi" alt="">
                            </div>
                            <img src="./assets/images/rooms.webp" alt="" class="img-fluid roomsImg">
                            <div class="innerRooms">
                                <h4>$1,750/mo</h4>
                                <div class="iconFlex">
                                    <h5>
                                        <img src="./assets/images/beds.webp" alt="" class="img-fluid iconsRoom">
                                        <span class="roomNumber">2</span>
                                        <span class="guestHead">Double Beds</span>
                                    </h5>
                                    <h5>
                                        <img src="./assets/images/users.webp" alt="" class="img-fluid iconsRoom">
                                        <span class="roomNumber">2</span>
                                        <span class="guestHead">Guests</span>
                                    </h5>

                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Earum molestias modi possimus reiciendis quaerat quia accusantium dolores dolorem ex 
                                    rerum minima nihil harum repellendus cupiditate pariatur, itaque fugit a autem.
                                </p>
                                <a href="">Book Now <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
                            </div>
                        </a>
                    </div>
               </div>
            </div>
        </div>
    </div>
</section>

<div class="modal-box">
    <div class="modal fade in" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog popupDailog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <div class="modal-body">
                    <div class="tab modalTab" role="tabpanel">
                        <!-- <h4 class="">Local Information</h4> -->
                        <ul class="nav nav-tabs oneUl" role="tablist">
                           <ul class="nav nav-tabs modalTabbs twoUl" role="tablist">
                                <li role="presentation"><a href="#mediaGallery" class="active"  aria-controls="home" role="tab" data-toggle="tab" aria-expanded="false">Media</a></li>
                                <li role="presentation"><a href="#mapSss" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false">Map</a></li>
                                <li role="presentation"><a href="#schoolSss" aria-controls="messages" role="tab" data-toggle="tab" aria-expanded="false">Schools</a></li>
                                <li role="presentation"><a href="#shopEatMaps" aria-controls="messages" role="tab" data-toggle="tab" aria-expanded="false">Shop & Eat</a></li>
                           </ul>
                           <div class="modalBtns">
                                <h5>
                                    <img src="./assets/images/icons/heart.avi" alt="">
                                    <span>Save</span>
                                </h5>
                                <h5>
                                    <img src="./assets/images/icons/share.avi" alt="">
                                    <span>Share</span>
                                </h5>
                           </div>
                        </ul>
                        <div class="tab-content tabs">
                            <div role="tabpanel" class="tab-pane fade active in" id="mediaGallery">
                                <div class="scrollBox">
                                    <div class="mainSlider">
                                        <div class="mainFlex">
                                            <div class="flexThree3">
                                                <div class="innerFlex">
                                                    <a href="./assets/images/roomGallery/one.webp" data-fancybox="gallery" class="fancyBox d-block">
                                                        <img src="./assets/images/roomGallery/one.webp" class="photo"/>
                                                    </a>
                                                    <a href="./assets/images/roomGallery/two.webp" data-fancybox="gallery" class="fancyBox d-block">
                                                        <img src="./assets/images/roomGallery/two.webp" class="photo"/>
                                                    </a>
                                                    <a href="./assets/images/roomGallery/three.webp" data-fancybox="gallery" class="fancyBox d-block">
                                                        <img src="./assets/images/roomGallery/three.webp" class="photo"/>
                                                    </a>
                                                </div>
                                                <div class="innerFlex">
                                                    <a href="./assets/images/roomGallery/four.webp" data-fancybox="gallery" class="fancyBox d-block">
                                                        <img src="./assets/images/roomGallery/four.webp" class="photo"/>
                                                    </a>
                                                    <a href="./assets/images/roomGallery/five.webp" data-fancybox="gallery" class="fancyBox d-block">
                                                        <img src="./assets/images/roomGallery/five.webp" class="photo"/>
                                                    </a>
                                                    <a href="./assets/images/roomGallery/six.webp" data-fancybox="gallery" class="fancyBox d-block">
                                                        <img src="./assets/images/roomGallery/six.webp" class="photo"/>
                                                    </a>
                                                </div>
                                                <div class="innerFlex">
                                                    <a href="./assets/images/roomGallery/seven.webp" data-fancybox="gallery" class="fancyBox d-block">
                                                        <img src="./assets/images/roomGallery/seven.webp" class="photo"/>
                                                    </a>
                                                    <a href="./assets/images/roomGallery/eight.webp" data-fancybox="gallery" class="fancyBox d-block">
                                                        <img src="./assets/images/roomGallery/eight.webp" class="photo"/>
                                                    </a>
                                                </div>
                                                <div class="innerFlex">
                                                    <a href="./assets/images/roomGallery/nine.webp" data-fancybox="gallery" class="fancyBox d-block">
                                                        <img src="./assets/images/roomGallery/nine.webp" class="photo"/>
                                                    </a>
                                                    <a href="./assets/images/roomGallery/ten.webp" data-fancybox="gallery" class="fancyBox d-block">
                                                        <img src="./assets/images/roomGallery/ten.webp" class="photo"/>
                                                    </a>
                                                    <a href="./assets/images/roomGallery/eleven.webp" data-fancybox="gallery" class="fancyBox d-block">
                                                        <img src="./assets/images/roomGallery/eleven.webp" class="photo"/>
                                                    </a>
                                                </div>
                                                <div class="innerFlex">
                                                    <a href="./assets/images/roomGallery/12.webp" data-fancybox="gallery" class="fancyBox d-block">
                                                        <img src="./assets/images/roomGallery/12.webp" class="photo"/>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade tabMap" id="mapSss">
                                <div class="googleMaps">
                                      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14479.802445836183!2d67.05838565!3d24.86553635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1660836982873!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade tabMap" id="schoolSss">
                                <div class="googleMaps">
                                      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14479.802445836183!2d67.05838565!3d24.86553635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1660836982873!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade tabMap" id="shopEatMaps">
                                <div class="googleMaps">
                                      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14479.802445836183!2d67.05838565!3d24.86553635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1660836982873!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include "./includes/footer.php"?>
</body>
</html>