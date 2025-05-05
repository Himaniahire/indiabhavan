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
            <h2 class="fs-4">Take Away Menu</h2>
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
                            <h3 class="menusub_text">Appetizers</h3>
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
                                            <h4>Mix Bhaji</h4>
                                            <span class="allergen"> [7]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€5.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Crispy, bite-size vegetable fritters loaded with onions, potatoes, gram flour and Indian Spices.</p>
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
                                            <h4>Paneer 65 </h4>
                                            <span class="allergen"> [1],[4],[2]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€8.95</span>
                                    </div>
                                    <div class="description">
                                        <p>This Delicious snack made with Cottage cheese, gram flour, ginger, garlic, spices and herbs.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Chilly Paneer </h4>
                                            <span class="allergen"> [4],[2]</span>
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
                                            <h4>Chilly Chicken </h4>
                                            <span class="allergen"> [2]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€8.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Boneless Chicken stir fried with ginger, garlic, onions, bell pepper and sauces.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Chicken 65 </h4>
                                            <span class="allergen"> [2]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€8.95</span>
                                    </div>
                                    <div class="description">
                                        <p>This popular South Indian snack made with juicy chicken pieces coated in a spicy
                                            masala, and fried till tender</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Chicken Manchurian</h4>
                                            <span class="allergen"> [2],[4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€9.95</span>
                                    </div>
                                    <div class="description">
                                        <p>This popular Indo-Chinese snack made with crispy chicken in a spicy tangy, sweet
                                            sauce, ginger, garlic, lemon, and herbs.
                                            </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Chicken Pakora </h4>
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
                                            <h4>Chicken Lollipop</h4>
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
                                            <h4>Chilly Prawns</h4>
                                            <span class="allergen"> [2]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€9.95</span>
                                    </div>
                                    <div class="description">
                                        <p>This spicy chilli garlic prawns is made with prawns, tomato sauce, soy sauce, spices,lemon, and herbs.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Prawn Manchurian</h4>
                                            <span class="allergen"> [2]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€9.95</span>
                                    </div>
                                    <div class="description">
                                        <p>This popular Indo-Chinese dish made with Manchurian sauce, plenty of spices, onions,
                                            capsicum, green chilli, garlic, lemon, and herbs.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Amritsari Fish</h4>
                                            <span class="allergen"> [11]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€8.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Salmon marinated in chilli powder, gram flour, yogurt, turmeric, and lemon juice.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Veg Platter</h4>
                                            <span class="allergen"> [4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€39.95</span>
                                    </div>
                                    <div class="description">
                                        <p>This Platter comes with Mirchi Bhajji, Potato Bhajji, Aubergine Bhajji, Punjabi Samosa, Mix Bhajia, Chilly Paneer.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Non-Veg Platter</h4>
                                            <span class="allergen"> [4],[2]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€49.95</span>
                                    </div>
                                    <div class="description">
                                        <p>This Platter comes with Malai Chicken Tikka, Achari Chicken Tikka, Pudina Chicken
                                            Tikka, Tandoori Chicken, Tandoori Prawns, Lamb Seekh Kebab, Lamb Chops.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Menu Box Start -->
                        <div class="menulist_box">
                            <h3 class="menusub_text">Biryanis</h3>
                            <div class="shish">
                                <p class="shi-p">All the Biryani’s served with Mirchi-ka-Salan & Raita</p>
                            </div>
                            <ul>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Vegetable Dum Biryani  </h4>
                                            <span class="allergen"> [4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€11.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Dum-cooked basmati rice, veggies and cottage cheese with aromatic spices sealed
                                            in a pot producing the most fragrant biryani with an exquisite taste with the side of
                                            mirchi-ka-salan & raita.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Chicken Dum Biryani (On Bone & Boneless)  <span class="allergen"> [4]</span></h4>

                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€12.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Dum-cooked basmati rice, and chicken with aromatic spices sealed in a pot producing
                                            the most fragrant biryani with an exquisite taste with the side of mirchi-ka-salan & raita.
                                            </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Lamb Dum Biryani (On Bone & Boneless)  <span class="allergen"> [4]</span></h4>

                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€14.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Dum-cooked basmati rice, and lamb with aromatic spices sealed in a pot producing
                                            the most fragrant biryani with an exquisite taste with the side of mirchi-ka-salan & raita.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Prawn Dum Biryani</h4>
                                            <span class="allergen"> [4],[6]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€14.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Dum-cooked basmati rice, and prawn with aromatic spices sealed in a pot producing
                                            the most fragrant biryani with an exquisite taste with the side of mirchi-ka-salan & raita.
                                            </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Double Chicken Dum Biryani</h4>
                                            <span class="allergen"> [4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€17.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Dum-cooked basmati rice, and Bone Chicken or Boneless Chicken with aromatic spices
                                            sealed in a pot producing the most fragrant biryani with an exquisite taste with the side
                                            of mirchi-ka-salan &n raita.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Double Lamb Dum Biryani</h4>
                                            <span class="allergen"> [4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€19.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Dum-cooked basmati rice, and Bone Lamb or Boneless Lamb with aromatic spices
                                            sealed in a pot producing the most fragrant biryani with an exquisite taste with the side
                                            of mirchi-ka-salan &n raita.
                                            </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Double Prawn Dum Biryani</h4>
                                            <span class="allergen"> [4],[6]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€19.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Dum-cooked basmati rice, and prawn with aromatic spices sealed in a pot producing
                                            the most fragrant biryani with an exquisite taste with the side of mirchi-ka-salan &n raita.</p>
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
                                            <span class="allergen"> [4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€9.95</span>
                                    </div>
                                    <div class="description">
                                        <p>It is traditionally made with boneless chicken, onions garlic cloves, ginger, garam masala
                                            and Greek yogurt gives creamy sauce for this flavourful dish.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Butter Chicken </h4>
                                            <span class="allergen"> [4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€9.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Boneless chicken curry made with turmeric, chilli powder, salt and garam masala</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Chicken Tikka Masala  </h4>
                                            <span class="allergen"> [4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€9.95</span>
                                    </div>
                                    <div class="description">
                                        <p>This delicious dish consisting of marinated boneless chicken pieces that are traditionally
                                            cooked in a tandoor and then served in a subtly spiced tomato-cream sauce.</p>
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
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Jeera Rice</h4>
                                            <span class="allergen"> [4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€3.95</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Vegetable Pilau Rice</h4>
                                            <span class="allergen"> </span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€4.95</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Egg Fried Rice</h4>
                                            <span class="allergen"> </span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€4.95</span>
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
                                            <span class="allergen">[2]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€1.95</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Tandoori Roti</h4>
                                            <span class="allergen"> [2]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€1.95</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Butter Naan </h4>
                                            <span class="allergen"> [2],[4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€2.25</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Garlic Naan</h4>
                                            <span class="allergen"> [2],[4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€2.50</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Chilly Garlic Naane</h4>
                                            <span class="allergen"> [2],[4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€2.75</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Garlic Coriander Naan </h4>
                                            <span class="allergen"> [2],[4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€3.00</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Garlic Onion Coriander Naan <span class="allergen"> [2],[4]</span></h4>

                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€3.25</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Cheese Naan</h4>
                                            <span class="allergen"> [2],[4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€3.00</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Chilli Cheese Naan </h4>
                                            <span class="allergen"> [2],[4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€3.25</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Garlic Cheese Naan </h4>
                                            <span class="allergen"> [2],[4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€3.50</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Peshwari Naan </h4>
                                            <span class="allergen"> [2],[4],[1]</span>
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
                            <h3 class="menusub_text">Vegeterian Mains</h3>
                            <div class="shish">
                                <p class="shi-p">Serves with Plain Rice or Plain Naan
                                </p>
                            </div>
                            <ul>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Palak Paneer  </h4>
                                            <span class="allergen"> [4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€13.95</span>
                                    </div>
                                    <div class="description">
                                        <p>This popular Indian Vegetarian dish consisting of cottage cheese (Paneer) in a smooth,creamy and delicious spinach gravy.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Kadai Paneer</h4>
                                            <span class="allergen"> [4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€13.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Kadai Paneer is a delicious north Indian dish made with paneer, kadai masala & bell
                                            peppers, tomatoes, onions.
                                            </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Paneer Butter Masala</h4>
                                            <span class="allergen"> [4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€13.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Cottage Cheese cubes in rich and creamy curry made of butter, cashews, onions, spice
                                            powders, and herbs.
                                            </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Malai Kofta  </h4>
                                            <span class="allergen"> [4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€13.95</span>
                                    </div>
                                    <div class="description">
                                        <p>This delicious dish made with fried balls of potato and paneer in a rich creamy mild gravy made with sweet onions and tomatoes.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Chana Masala  </h4>
                                            <span class="allergen"> </span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€11.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Soaked white chickpeas with turmeric, onions, ginger, cloves, cumin, and garam masala.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Aubergine Masala </h4>
                                            <span class="allergen"> [4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€12.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Packed with flavourful spices, herbs, ginger, garlic, tomatoes, onions.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Mix Vegetable </h4>
                                            <span class="allergen"> [4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€11.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Great combination of sliced mixed vegetables and gravy – Carrots, green peas, corn,beans, and cottage cheese.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Kadai Mushroom  </h4>
                                            <span class="allergen"> </span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€12.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Kadai Mushroom is yummy semi gravy made by cooking mushroom in a tomato & onion
                                            based saucy mix</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Mushroom Spinach</h4>
                                            <span class="allergen"> [4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€12.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Mushrooms cooked with spinach leaves, different combination of onions, tomatoes,
                                            ginger and garam masala.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Aloo Matar  </h4>
                                            <span class="allergen"> </span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€12.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Aloo Matar is a classic Indian curry made with potatoes and green peas, and spices
                                            cooked in onion and tomato gravy.
                                            </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Saag Aloo </h4>
                                            <span class="allergen"> </span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€12.95</span>
                                    </div>
                                    <div class="description">
                                        <p>A beautifully spiced dish made with potatoes and spinach, (saag Aloo) makes a great
                                            dish for curry night goes better with any bread.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Jeera Aloo  </h4>
                                            <span class="allergen"> </span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€12.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Punch of flavours from whole cumin seeds (Jeera), ground cumin, ginger, red chilli
                                            powder with potatoes.
                                            </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Dal Palak </h4>
                                            <span class="allergen"> [4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€12.95</span>
                                    </div>
                                    <div class="description">
                                        <p>This delicious and creamy Dal palak is a healthy dish, made with lentils, fresh palak,
                                            and spices.
                                            </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Dal Makhani   </h4>
                                            <span class="allergen"> [4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€13.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Traditional variation of lentil dish, made with black beans and other pulses includes
                                            butter seasoned with fresh cream.
                                            </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Dal Tadka </h4>
                                            <span class="allergen"> [4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€12.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Indian lentil dish made with husked and split pigeon pea lentils combines with garlic
                                            and red chilli pepper and a punch of tang from fresh tomatoes</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Menu Box Start -->
                        <div class="menulist_box">
                            <h3 class="menusub_text">Tandoori Appetizers</h3>
                            <ul>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Achari Chicken Tikka</h4>
                                            <span class="allergen"> [10]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€7.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Roasted boneless chicken in yogurt and Indian pickled spices served with mint chutney.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Pudina chicken Tikka</h4>
                                            <span class="allergen"> [1]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€7.95</span>
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
                                            <span class="allergen"> [4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€7.95</span>
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
                                            <span class="allergen"> [4]</span>
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
                            <h3 class="menusub_text">Non-vegetarian Main Course</h3>
                            <div class="shish">
                                <h4 class="shi">Chicken - €13.95/ Lamb – 15.95/ Prawn – 14.95</h4>
                                <p class="shi-p">Serves with Plain Rice or Plain Naan</p>
                            </div>
                            <h3 class="menusub_text">Mild Dishes</h3>
                            <ul>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Chicken Korma </h4>
                                            <span class="allergen"> [4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price"></span>
                                    </div>
                                    <div class="description">
                                        <p>It is traditionally made with boneless chicken, onions garlic cloves, ginger, garam masala
                                            and Greek yogurt gives creamy sauce for this flavourful dish.
                                            </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Butter Chicken  </h4>
                                            <span class="allergen"> [4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price"></span>
                                    </div>
                                    <div class="description">
                                        <p>Boneless chicken curry made with turmeric, chilli powder, salt and garam masala</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Chicken Tikka Masala </h4>
                                            <span class="allergen"> [4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price"></span>
                                    </div>
                                    <div class="description">
                                        <p>This delicious dish consisting of marinated boneless chicken pieces that are traditionally
                                            cooked in a tandoor and then served in a subtly spiced tomato-cream sauce.
                                            </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Malabar Chicken</h4>
                                            <span class="allergen"> [4],[10]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price"></span>
                                    </div>
                                    <div class="description">
                                        <p>Kerala style chicken curry made with turmeric powder, coriander powder.</p>
                                    </div>
                                </li>
                            </ul>
                            <h3 class="menusub_text">Medium Dishes</h3>
                            <div class="shish">
                                <p class="shi-p">Choice of Chicken or Lamb.</p>
                            </div>
                            <ul>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Methi</h4>
                                            <span class="allergen"> [4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price"></span>
                                    </div>
                                    <div class="description">
                                        <p>Perfect mixture of fenugreek leaves, onions, spinach, spices, herbs, tomatoes, and yogurt,
                                            serves with choice of chicken or Lamb.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Rogan Josh  </h4>
                                            <span class="allergen"> [4],[2]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price"></span>
                                    </div>
                                    <div class="description">
                                        <p>Heady combination of intense spices in a creamy tomato curry sauce, choice of Chicken
                                            or Lamb.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Kadai</h4>
                                            <span class="allergen"> [4],[2]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price"></span>
                                    </div>
                                    <div class="description">
                                        <p>This delicious curry cooked in the traditional kadai with tender chicken or lamb and a
                                            rich blend of aromatic spices, along with crunchy onions and capsicum.
                                            </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Saag</h4>
                                            <span class="allergen"> [4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price"></span>
                                    </div>
                                    <div class="description">
                                        <p>Chicken or Lamb mixed with creamy spinach curry packed with flavour, fragrance and
                                            the most luxurious texture.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Lamb Keema Masala</h4>
                                            <span class="allergen"> [3],[10]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price"></span>
                                    </div>
                                    <div class="description">
                                        <p>Authentic Indian Lamb keema is made with minced lamb meat, aromatic tomato,
                                            onion curry sauce, and packed with Indian spices.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Prawn curry</h4>
                                            <span class="allergen"> [6]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price"></span>
                                    </div>
                                    <div class="description">
                                        <p>King Prawns flavourful curry with onions, tomatoes, spices, and herbs.</p>
                                    </div>
                                </li>
                            </ul>
                            <h3 class="menusub_text">Hot Dishes</h3>
                            <div class="shish">
                                <p class="shi-p">Choice of Chicken or Lamb.</p>
                            </div>
                            <ul>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Jalfrezi</h4>
                                            <span class="allergen"> [10],[3],[7]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price"></span>
                                    </div>
                                    <div class="description">
                                        <p>Jalfrezi is a flavoursome & delicious Indian dish of stir-fried with a choice chicken or lamb
                                            or prawns with plenty of veggies & spices.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Madras  </h4>
                                            <span class="allergen"> [1]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price"></span>
                                    </div>
                                    <div class="description">
                                        <p>Madras is a fairly hot curry with a dark red thick sauce the colour comes from the chillies
                                            and paprika, it’s got slightly tangy taste. Choice of Chicken or Lamb or Prawns.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Vindaloo</h4>
                                            <span class="allergen"> [10],[7],[8],[1]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price"></span>
                                    </div>
                                    <div class="description">
                                        <p>Vindaloo is a traditional Indian curry made with Kashmiri chillies, cloves, garlic, ginger,
                                            cinnamon, peppercorns, cumin, cardamom, bay leaves, and star anise. Choice of
                                            Chicken or Lamb or Prawns.
                                            </p>
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
