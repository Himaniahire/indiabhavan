@extends('layouts.layout')
@section('content')

<!-- Offer Menu Gallery Start -->
<div class="gallery_direction_right gallery_slider offer_menu">
    <!-- Right To left -->
    <div class="owl-carousel owl-theme" id="gallery_flow_right" data-aos="fade-in" data-aos-duration="1500">
        <!--<div class="item">-->
        <!--    <div class="img">-->
        <!--        <img src="{{asset('images/bhavan/platter.jpeg')}}" alt="img">-->
        <!--    </div>-->
        <!--</div>-->
        <!--<div class="item">-->
        <!--    <div class="img">-->
        <!--        <img src="{{asset('images/bhavan/item.jpeg')}}" alt="img">-->
        <!--    </div>-->
        <!--</div>-->
        <div class="item">
            <div class="img">
                <img src="{{asset('images/bhavan/burgur.jpeg')}}" alt="img">
            </div>
        </div>
        <div class="item">
            <div class="img">
                <img src="{{asset('images/bhavan/masala.jpeg')}}" alt="img">
            </div>
        </div>
        <div class="item">
            <div class="img">
                <img src="{{asset('images/bhavan/curry.jpeg')}}" alt="img">
            </div>
        </div>
        <!--<div class="item">-->
        <!--    <div class="img">-->
        <!--        <img src="{{asset('images/bhavan/loli.jpeg')}}" alt="img">-->
        <!--    </div>-->
        <!--</div>-->
        <!--<div class="item">-->
        <!--    <div class="img">-->
        <!--        <img src="{{asset('images/bhavan/leg.jpeg')}}" alt="img">-->
        <!--    </div>-->
        <!--</div>-->
        <div class="item">
            <div class="img">
                <img src="{{asset('images/bhavan/handi.jpeg')}}" alt="img">
            </div>
        </div>
    </div>
</div>
<!-- Offer Menu Gallery End -->

<!-- Menu Section Start -->
<section class="row_am offer_menu_section">
    <div class="c-1450 container">
        <!-- Section Title Start -->
        <div class="section_title text-center" data-aos="fade-up" data-aos-duration="1500">
            <span class="sub_text">~ Our Indian ~</span>
            <h2 class="fs-4">Lunch Menu</h2>
            <div class="tile" style="padding: 0 0 33px;">
                <img src="{{asset('images/bhavan/title-shape.png')}}" alt="" class="h-13">
            </div>
        </div>
        <!-- Section Title End -->
        <!-- Navigation tab Start -->

        <!-- Navigation tab End -->

        <!-- Tab Content Start -->
        <div class="" data-aos="fade-up" data-aos-duration="1500">
            <!-- Tab Block -->
            <div class="pt-100">
                <!-- MenuList Wraper -->
                <div class="menulist_wraper">
                    <!-- Menu Left Side -->
                    <div class="menulist left_side">
                        <!-- Menu Box Start -->
                        <div class="menulist_box">
                            <h3 class="menusub_text">Starter - Veg</h3>
                            <ul>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Samosa Chana Chaat  </h4>
                                            <span class="allergen"> [4],[2]</span>

                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€7.95</span>
                                    </div>
                                    <div class="description">
                                        <p>A Tasty & tangy Snack Made with Savory fried pastries, chickpeas, spices, herbs, onions,tomatoes, and lemon</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Allo Tikki Chat </h4>
                                            <span class="allergen"> [4],[2]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€7.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Crispy fried potato cubes flavored with ground spices and sweet-and-sour date and tamarind sauce, garnished with coriander leaves and crunchy pomegranate seeds.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Mix Bhajia</h4>
                                            <span class="allergen"> [7],[14]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€6.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Crispy, bite-size vegetable fritters loaded with onions, potatoes, gram flour and Indian Spices.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Mirchi Bhaji</h4>
                                            <span class="allergen"> [7],[14]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€6.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Mirchi Bhajji is a popular South Indian Street fried snack made with gram flour, spices and green chilies. Mirchi translates to chilies and Bhajji to gram flour fritters.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Hara bara Kebab <span class="allergen">[1],[4],[7],[3],[10],[9],[14]</span></h4>

                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€6.95</span>
                                    </div>
                                    <div class="description">
                                        <p>This delicious snack made with spinach, potatoes, peas, carrot, spices and herbs.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Gobi 65 </h4>
                                            <span class="allergen" style="left: 0%;"> [1],[4],[2]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€7.95</span>
                                    </div>
                                    <div class="description">
                                        <p>This popular Indian snack is made using cauliflower is coated in spices, ginger, garlic and lemon juice</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Chilly Paneer </h4>
                                            <span class="allergen"> [1],[4],[2]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€8.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Cottage cheese cubes stir fried with ginger, garlic, onions, bell pepper and sauces</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Vada Pav </h4>
                                            <span class="allergen"> [2],[13]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€8.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Vada Pav is a Savory and spicy soft dinner rolls or fluffy buns, referred to as Pav, stuffed with a fried batter coated potato dumpling fritter called Batata Vada and laced with spicy and sweet chutneys.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Pav Bhaji</h4>
                                            <span class="allergen"> [2],[4],[13]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€8.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Pav Bhaji is a delicious street food from Mumbai. It is a blend of spicy mashed vegetables served with butter toasted buns.</p>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <!-- Menu Box Start -->
                        <div class="menulist_box">
                            <h3 class="menusub_text">Biryanis</h3>
                            <ul>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Hyderabadi Chicken Dum Biryani (On bone) <span class="allergen"> [4]</span></h4>

                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€12.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Dum-cooked basmati rice, and chicken with aromatic spices sealed in a pot producing the most fragrant biryani with an exquisite taste with the side of mirchi-ka-salan & raita.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Hyderabadi Lamb Dum Biryani (On Bone)  <span class="allergen"> [4]</span></h4>

                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€15.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Dum-cooked basmati rice, and lamb with aromatic spices sealed in a pot producing the most fragrant biryani with an exquisite taste with the side of mirchi-ka-salan & raita.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Hyderabadi Chicken Handi Dum Biryani (On Bone)  <span class="allergen"> [4]</span></h4>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€17.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Dum-cooked basmati rice, and Bone Chicken with aromatic spices sealed in a pot producing the most fragrant biryani with an exquisite taste with the side of mirchi-ka-salan & raita.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Hyderabadi lamb Handi Dum Biryani (On Bone)  <span class="allergen"> [4]</span></h4>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€20.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Dum-cooked basmati rice, and Bone Lamb or Boneless Lamb with aromatic spices sealed in a pot producing the most fragrant biryani with an exquisite taste with the side of mirchi-ka-salan & raita.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Menu Box End -->
                        <div class="menulist_box">
                            <h3 class="menusub_text">Kids</h3>
                            <div class="shish">
                                <p class="shi-p">Serves with Plain Rice</p>
                            </div>
                            <ul>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Chicken Korma  </h4>
                                            <span class="allergen"> [1],[4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€9.95</span>
                                    </div>
                                    <div class="description">
                                        <p>It is traditionally made with boneless chicken, onions garlic cloves, ginger, garam masala
                                            and Greek yogurt gives creamy sauce for this flavourful dish.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>



                        <!-- Menu Box End -->
                        <div class="menulist_box">
                            <h3 class="menusub_text">Breads</h3>
                            <ul>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Tandoori Naan  </h4>
                                            <span class="allergen">[8]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€1.95</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Tandoori Roti</h4>
                                            <span class="allergen"> </span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€1.95</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Butter Naan </h4>
                                            <span class="allergen"> [8],[4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€2.25</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Garlic Naan</h4>
                                            <span class="allergen"> [8],[4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€2.50</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Chilly Garlic Naane</h4>
                                            <span class="allergen"> [8],[4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€2.75</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Garlic Coriander Naan </h4>
                                            <span class="allergen"> [8],[4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€3.00</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Garlic Onion Coriander Naan <span class="allergen"> [8],[4]</span></h4>

                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€3.25</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Cheese Naan</h4>
                                            <span class="allergen"> [8],[4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€3.00</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Chilli Cheese Naan </h4>
                                            <span class="allergen"> [8],[4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€3.25</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Garlic Cheese Naan </h4>
                                            <span class="allergen"> [8],[4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€3.50</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Peshwari Naan </h4>
                                            <span class="allergen"> [8],[4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€3.95</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Menu Right Side -->
                    <div class="menulist right_side">
                        <!-- Menu Box Start -->
                        <div class="menulist_box">
                            <h3 class="menusub_text">Starter - Non veg</h3>
                            <ul>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Chicken Lollipop  </h4>
                                            <span class="allergen"> [2],[4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€7.95</span>
                                    </div>
                                    <div class="description">
                                        <p>These crispy and flavourful chicken lollipops are marinated in a spicy yogurt mixture and then coated in a mixture of breadcrumbs and spices.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Chicken Pakora</h4>
                                            <span class="allergen"> [2],[10],[1]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€7.95</span>
                                    </div>
                                    <div class="description">
                                        <p>This snack is made with gram flour, bone chicken, spices & herbs.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Chilly Chicken</h4>
                                            <span class="allergen"> [2]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€8.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Boneless Chicken stir fried with ginger, garlic, onions, bell pepper and sauces.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Pepper Lamb Fry  </h4>
                                            <span class="allergen"> </span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€9.95</span>
                                    </div>
                                    <div class="description">
                                        <p>This delicious dish is made with lemon juice, fennel powder, garam masala, turmeric powder, Kashmiri chilli powder, coriander powder and salt.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Chilly Prawns fry</h4>
                                            <span class="allergen"> [6]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€9.95</span>
                                    </div>
                                    <div class="description">
                                        <p>This spicy chilli garlic prawns are made with prawns, tomato sauce, soy sauce, spices, lemon, and herbs.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Fish fry</h4>
                                            <span class="allergen"> [11]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€9.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Fish Fillet is coated with spices, herbs and lemon juice.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Menu Box Start -->
                        <div class="menulist_box">
                            <h3 class="menusub_text">Tandoori Starter</h3>
                            <ul>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Achari Chicken Tikka</h4>
                                            <span class="allergen"> [10]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€8.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Roasted boneless chicken in yogurt and Indian pickled spices served with mint chutney.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Pudina chicken Tikka</h4>
                                            <span class="allergen"> [1],[10]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€8.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Roasted boneless chicken in mint sauce, coriander, and green chillies.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Malai Chicken Tikka</h4>
                                            <span class="allergen"> [4],[10]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€8.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Roasted boneless chicken with ginger, garlic, green chillies, cream-cheese, coriander stem and cardamom.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Tandoori chicken</h4>
                                            <span class="allergen"> [4],[10]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€8.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Roasted chicken with yogurt, red chilli powder, turmeric and seasoned with cayenne
                                            pepper.
                                            </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Tandoori Prawns</h4>
                                            <span class="allergen"> [6]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€9.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Jumbo King Prawns skewered with marinated curry spices, lemon juice, yogurt, fennel
                                            seeds give the aromatic flavour.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Lamb Seekh Kebab </h4>
                                            <span class="allergen"> [10]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€9.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Minced lamb slathered in a bowl of spices and grilled to [perfection and served with mint chutney.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Lamb Chop </h4>
                                            <span class="allergen"> [4],[10]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€9.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Lamb chops seasoned with garlic powder, coriander, cumin, paprika, chilli powder, and mustard powder.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Menu Box End -->
                        <div class="menulist_box">
                            <h3 class="menusub_text">Mains</h3>
                            <div class="shish">
                                <p class="shi-p">Serves with Plain Rice or Plain Naan</p>
                            </div>
                            <ul>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Dal Tadka</h4>
                                            <span class="allergen"> [4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€12.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Indian lentil dish made with husked and split pigeon pea lentils combines with garlic and red chilli pepper and a punch of tang from fresh tomatoes.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Paneer Butter Masala </h4>
                                            <span class="allergen"> [4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€13.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Cottage Cheese cubes in rich and creamy curry made of butter, cashews, onions, spice powders, and herbs.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Chicken Tikka Masala (Boneless) <span class="allergen"> [3],[4]</span></h4>

                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€14.95</span>
                                    </div>
                                    <div class="description">
                                        <p>This delicious dish consisting of marinated boneless chicken pieces that are traditionally cooked in a tandoor and then served in a subtly spiced tomato-cream sauce.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Chicken Chettinad Masala (on bone) <span class="allergen"> [3],[4]</span></h4>

                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€15.95</span>
                                    </div>
                                    <div class="description">
                                        <p>This popular dish is made with Chicken, Yoghurt, Cream, Tomato, Onion, Garlic, Ginger, Chili pepper, Black pepper, Coconut.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Lamb Masala (on bone/boneless) <span class="allergen"> [4]</span></h4>

                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€15.95</span>
                                    </div>
                                    <div class="description">
                                        <p>This delicious dish is made with Indian spices, Indian butter, Tomato, Coriander Leaves, Mint Leaves & Lemon Juice.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Menu Box End -->
                        <div class="menulist_box">
                            <h3 class="menusub_text">Sides</h3>
                            <ul>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Paapad </h4>
                                            <span class="allergen"> [5]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€1.95</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Basmati Rice</h4>
                                            <span class="allergen"> [4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€3.50</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Pilau Rice</h4>
                                            <span class="allergen"> </span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€3.95</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Menu Box Start -->
                        <div class="menulist_box">
                            <h3 class="menusub_text">Desserts</h3>
                            <ul>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Gulab Jamun</h4>
                                            <span class="allergen"> [2]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€4.95</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Rasgulla</h4>
                                            <span class="allergen"> [2],[4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€4.95</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Rasmalai</h4>
                                            <span class="allergen"> [2]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€4.95</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="note">
                    <p>FOR ALL ALLERGEN INFORMATIONS PLEASE REFER THE NUMBER BESIDE MENU ITEM IN <span style="color: #ff4343;">RED</span> </p>
                    <p>Nuts (1) Gluten (2) Sesame Seeds (3) Dairy  (4) Lupin (5) Crustaceans (6) Soya (7) Eggs (8) Peanuts (9) Mustard (10) Fish (11) Celery (12) Gram Flour (13) </p>
                    <p>Please Check with our Staff for more Allergens (14)</p>
                </div>
            </div>






        </div>
        <!-- Tab Content End -->

    </div>
</section>
<!-- Menu Section End -->

@endsection
