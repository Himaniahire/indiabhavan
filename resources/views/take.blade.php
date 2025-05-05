@extends('layouts.layout')
@section('content')

<!-- Offer Menu Gallery Start -->
<div class="gallery_direction_right gallery_slider offer_menu">
    <!-- Right To left -->
    <div class="owl-carousel owl-theme" id="gallery_flow_right" data-aos="fade-in" data-aos-duration="1500">
        <div class="item">
            <div class="img">
                <img src="{{asset('images/bhavan/platter.jpeg')}}" alt="img">
            </div>
        </div>
        <div class="item">
            <div class="img">
                <img src="{{asset('images/bhavan/item.jpeg')}}" alt="img">
            </div>
        </div>
        <div class="item">
            <div class="img">
                <img src="{{asset('images/bhavan/wrap.jpeg')}}" alt="img">
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
        <div class="item">
            <div class="img">
                <img src="{{asset('images/bhavan/loli.jpeg')}}" alt="img">
            </div>
        </div>
        <div class="item">
            <div class="img">
                <img src="{{asset('images/bhavan/leg.jpeg')}}" alt="img">
            </div>
        </div>
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
            <span class="sub_text">~ Our Mediterranean ~</span>
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
                            <h3 class="menusub_text">Starter</h3>
                            <ul>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Falafel Starter </h4>
                                            <span class="allergen"> [7],[14],[3]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€6.95</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Chicken Wings</h4>
                                            <span class="allergen"> </span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€6.95</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Humus & Bread</h4>
                                            <span class="allergen"> [2],[4],[8]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€5.50</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Homemade Coleslaw & Bread </h4>
                                            <span class="allergen"> </span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€5.50</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Mix Special Salad </h4>
                                            <span class="allergen"> </span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€5.50</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Prawns pil pil </h4>
                                            <span class="allergen"> [2],[6],[11]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€8.95</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Menu Box Start -->
                        <div class="menulist_box">
                            <h3 class="menusub_text">Grill Chicken</h3>
                            <ul>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Half Chicken </h4>
                                            <span class="allergen"> [4],[2]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€15.95</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Half Chicken (+ Chicken Wings Starter) <span class="allergen"> [4],[2]</span></h4>

                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€33.95</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Portuguese Wings</h4>
                                            <span class="allergen"> [4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€12.95</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Menu Box End -->
                        <div class="menulist_box">
                            <h3 class="menusub_text">Vegetarian</h3>
                            <ul>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Falafel </h4>
                                            <span class="allergen"> [14],[7],[3]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€11.95</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Vegetable Shish</h4>
                                            <span class="allergen"> </span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€11.95</span>
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
                                            <h4>Fries </h4>
                                            <span class="allergen"> </span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€3.50</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Garlic Fries</h4>
                                            <span class="allergen"> </span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€4.00</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Sweet Potato Fries </h4>
                                            <span class="allergen"> </span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€5.00</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Garlic Cheese Fries</h4>
                                            <span class="allergen"> </span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€4.50</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Fresh Tandoori Naan Bread <span class="allergen"> [8],[4]</span></h4>

                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€1.50</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Side Salad</h4>
                                            <span class="allergen"> </span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€3.50</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Basmati Rice</h4>
                                            <span class="allergen"> </span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€3.50</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Hummus</h4>
                                            <span class="allergen"> </span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€4.00</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Tzatziki</h4>
                                            <span class="allergen"> </span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€4.00</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Homemade Coleslaw</h4>
                                            <span class="allergen"> </span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€4.00</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Chilli/Garlic/ BBQ Sauce</h4>
                                            <span class="allergen"> </span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€1.00</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Menu Box End -->
                        <div class="menulist_box">
                            <h3 class="menusub_text">Drinks</h3>
                            <ul>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Soft Drinks </h4>
                                            <span class="allergen"> </span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€2.50</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Still/Sparkling Water</h4>
                                            <span class="allergen"> </span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€2.85</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Bottle Wine (Red, White) </h4>
                                            <span class="allergen"> </span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€24.95</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Menu Box End -->
                        <div class="menulist_box">
                            <h3 class="menusub_text">Desserts</h3>
                            <ul>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Chocolate Brownie <span class="allergen"> [8],[2],[4],[7],[1]</span></h4>

                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€5.95</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Sticky Toffee Cake</h4>
                                            <span class="allergen"> [8][2],[4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€5.95</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Apple Crumble </h4>
                                            <span class="allergen"> [2],[4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€5.95</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Cheese Cake </h4>
                                            <span class="allergen"> [8],[2],[4],[7]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€5.95</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Menu Right Side -->
                    <div class="menulist right_side">
                        <!-- Menu Box Start -->
                        <div class="menulist_box">
                            <h3 class="menusub_text">Mains</h3>
                            <div class="shish">
                                <h4 class="shi">Shish</h4>
                                <p class="shi-p">Good things grilled on a skewer over charcoal. (All meals come with a mix salad and chilly & garlic sauce.) Note : The bread, salad, meat and sauces all come separate and NOT wrapped.</p>
                            </div>
                            <ul>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Chicken Shish </h4>
                                            <span class="allergen"> [2],[4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€12.95</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Classic Kubideh</h4>
                                            <span class="allergen"> [2],[4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€12.95</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Lamb Fillet</h4>
                                            <span class="allergen"> [2],[4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€14.95</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Fresh Salmon </h4>
                                            <span class="allergen"> [2],[4],[11]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€15.95</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Chollo Kebab (2 Kubideh) </h4>
                                            <span class="allergen"> </span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€21.95</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Mix Double (Chicken+Kubideh) <span class="allergen"> [14]</span></h4>

                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€21.95</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Prawns pil pil </h4>
                                            <span class="allergen"> [2],[6],[11]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€15.95</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="shish">
                                <h4 class="shi">Doner Kebab</h4>
                                <p class="shi-p">Slowly roasted on a spit and carved to order, Note : The Doner Kebabs comes in wrapped. If you want everything to come separate then please add a message before checkout.</p>
                            </div>
                            <ul>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Lamb or Chicken or Mixed </h4>
                                            <span class="allergen"> </span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€11.95</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Doner Box</h4>
                                            <span class="allergen"> </span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€11.95</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Menu Box Start -->
                        <div class="menulist_box">
                            <h3 class="menusub_text">Burgers With Fries</h3>
                            <ul>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Chicken Fillet </h4>
                                            <span class="allergen"> [8],[2],[7],[10]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€12.95</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Beef with cheese</h4>
                                            <span class="allergen"> [8],[2],[7],[10]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€12.95</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Menu Box End -->
                        <div class="menulist_box">
                            <h3 class="menusub_text">Deal 1 (2 People) €32.95</h3>
                            <ul>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>6 Chicken Wings piri piri </h4>
                                        </div>
                                        <div class="doted"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>1 Chicken Shish</h4>
                                        </div>
                                        <div class="doted"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>1 Mixed doner kebab</h4>
                                        </div>
                                        <div class="doted"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>1 Salad Garnish</h4>
                                        </div>
                                        <div class="doted"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>1 Naan Bread</h4>
                                        </div>
                                        <div class="doted"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>1 Fries</h4>
                                        </div>
                                        <div class="doted"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>1 Garlic Sauce</h4>
                                        </div>
                                        <div class="doted"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>1 Chilli Sauce</h4>
                                        </div>
                                        <div class="doted"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>1 Soft Drinks</h4>
                                        </div>
                                        <div class="doted"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Menu Box Start -->
                        <div class="menulist_box">
                            <h3 class="menusub_text">Kids</h3>
                            <ul>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Chicken Nuggets with fries <span class="allergen"> [8]</span></h4>

                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€7.95</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Chicken dippers with fries</h4>
                                            <span class="allergen"> </span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€7.95</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Bun burger with fries </h4>
                                            <span class="allergen"> [4],[2]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€7.95</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>chicken shish</h4>
                                            <span class="allergen"> [4],[2]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€8.95</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="note">
                    <p>FOR ALL ALLERGEN INFORMATIONS PLEASE REFER THE NUMBER BESIDE MENU ITEM IN <span style="color: #ff4343;">RED</span> </p>
                    <p>Nuts (1) Gluten (2) Sesame Seeds (3) Dairy (4) Lupin (5) Crustaceans (6) Soya (7) Eggs (8) Peanuts (9) Mustard (10) Fish (11) Celery (12) Gram Flour (13)

                        Please Check with our Staff for more Allergens (14)</p>
                </div>
            </div>
        </div>
        <!-- Tab Content End -->
    </div>
</section>
<!-- Menu Section End -->

@endsection
