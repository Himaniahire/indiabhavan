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
            <h2 class="fs-4">Dine In Menu</h2>
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
                                            <h4>Chicken Shish  </h4>
                                            <span class="allergen"> [4]</span>

                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€8.50</span>
                                    </div>
                                    <div class="description">
                                        <p>Boneless Chicken fillet grilled, marinated with saffron & coconut served with mango sauce.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Portuguese wings</h4>
                                            <span class="allergen"> [4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€7.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Grilled Chicken wings in a flavour of your choice (Piri Piri, Lemon Herb or BBQ) served with garlic sauce.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Prawns pil pil</h4>
                                            <span class="allergen"> [2],[6]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€9.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Fresh prawns pan – fried with garlic yellow & red chillis, served with fresh naan bread.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Falafel Starters </h4>
                                            <span class="allergen"> [3],[7]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€7.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Chickpea patty with parsley & spices, comes with hummus.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Hummus & Tzatziki with bread
                                            <span class="allergen" style="left: 0%;"> [2],[4]</span></h4>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€8.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Hummus made of chickpeas, olive oil, garlic, tahini, lemon juice. Tzatziki made of Greek yogurt, cucumbers, garlic, olive oil, lemon & parsley, served with fresh naan bread.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Coban Salad</h4>
                                            <span class="allergen"> </span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€7.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Tomato, cucumber, onion, parsley, olive oil, lemon juice, croutons.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Menu Box Start -->
                        <div class="menulist_box">
                            <h3 class="menusub_text">Platter</h3>
                            <ul>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Mediterranean Platter </h4>
                                            <span class="allergen"> [14]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€49.95</span>
                                    </div>
                                    <div class="description">
                                        <p>This Platter comes with Chicken wings, Lamb Kebab, Chicken Kebab, Classic Kubideh, Chicken Shish, Half Chicken Piri Piri, Lamb Kubideh, Fries.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Menu Box End -->
                        <div class="menulist_box">
                            <h3 class="menusub_text">Kebabs</h3>
                            <div class="shish">
                                <p class="shi-p">Slowly roasted on a Spit and Carved to Order. All doner Kebabs comes with Salad, Naan Bread and side of Chilli & Garlic Sauce.</p>
                            </div>
                            <ul>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Lamb Kebab  </h4>
                                            <span class="allergen"> [2],[4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€16.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Lamb marinated and layered with flavourings and our special spices.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Chicken Kebab </h4>
                                            <span class="allergen"> [2],[4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€16.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Irish Chicken marinated with our special spices and herbs.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Mixed Kebab </h4>
                                            <span class="allergen"> [2],[4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€16.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Can’t decide? Have both Lamb & Chicken.</p>
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
                                            <h4>Fries</h4>
                                            <span class="allergen"> </span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€3.50</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Garlic Fries </h4>
                                            <span class="allergen"> </span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€4.00</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Garlic Cheese Fries </h4>
                                            <span class="allergen"> </span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€4.50</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Sweet Potato Fries</h4>
                                            <span class="allergen"> </span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€5.00</span>
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
                                            <h4>Fresh Tandoori Naan Bread <span class="allergen"> [8],[4]</span></h4>
                                            
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€1.50</span>
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
                                            <h4>Chilli / Garlic /BBQ Sauce</h4>
                                            <span class="allergen"> </span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€1.00</span>
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
                                            <h4>Side Salad</h4>
                                            <span class="allergen"> </span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€3.50</span>
                                    </div>
                                </li>
                                <!--<li>-->
                                <!--    <div class="mainCource">-->
                                <!--        <div class="dishName">-->
                                <!--            <h4>Mix Special Salad</h4>-->
                                <!--            <span class="allergen"> </span>-->
                                <!--        </div>-->
                                <!--        <div class="doted"></div>-->
                                <!--        <span class="price">€5.50</span>-->
                                <!--    </div>-->
                                <!--</li>-->
                            </ul>
                        </div>

                        
                    </div>
                    <!-- Menu Right Side -->
                    <div class="menulist right_side">
                        <!-- Menu Box Start -->
                        <div class="menulist_box">
                            <h3 class="menusub_text">Grill</h3>
                            <div class="shish">
                                <h4 class="shi">Shish</h4>
                                <p class="shi-p">All Shish’s comes with a Mix Salad, Choice of Plain Naan Bread or Plain Rice and side of chilli & Garlic Sauce.</p>
                            </div>
                            <ul>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Falafel Mains </h4>
                                            <span class="allergen"> [2],[3],[7]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€13.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Chickpea patty with parsley & spices, comes with hummus.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Portuguese wings</h4>
                                            <span class="allergen"> [4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€14.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Grilled Chicken wings in a flavour of your choice (Piri Piri, Lemon Herb or BBQ), served with garlic sauce.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Piri Piri Chicken (Half Chicken) <span class="allergen"> [4]</span></h4>

                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€16.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Half Grilled chicken in a flavour of your choice (Piri Piri, Lemon Herb or BBQ), serves with both Plain rice & Plain Naan.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Chicken Shish </h4>
                                            <span class="allergen"> [2],[4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€17.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Boneless Irish Chicken fillet, marinated with saffron.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Classic Kubideh Shish </h4>
                                            <span class="allergen"> [2],[4],[8]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€17.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Minced Beef & Lamb with fresh Herbs.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Lamb Fillet Shish </h4>
                                            <span class="allergen"> [2],[4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€23.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Fresh Irish Lamb fillet Marinated with garlic & spices.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Prawns pil pil </h4>
                                            <span class="allergen"> [2],[6]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€20.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Fresh Prawns pan-fried with garlic, red & yellow chillis, served with naan bread or rice.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Salmon Fish Shish  </h4>
                                            <span class="allergen"> [2],[4],[11]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€23.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Fresh Salmon fillet pieces marinated with herbs, spices and lime jest.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Double Shish </h4>
                                            <span class="allergen"> [14]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€34.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Choose any two shish, choice of Chicken or Lamb or Kudideh.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Menu Box Start -->
                        <div class="menulist_box">
                            <h3 class="menusub_text">Burgers</h3>
                            <ul>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Chicken Fillet Burger</h4>
                                            <span class="allergen"> </span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€15.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Homemade Grilled Chicken Fillet served with lettuce, onions, tomatoes, pickles, burger sauce in a bun, served with chips.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Beef Burger with cheese <span class="allergen"> [8],[2],[10]</span></h4>

                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€15.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Homemade Beef burger served, with lettuce, onions, tomatoes, pickles, burger sauce in a bun, served with chips.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Lamb Burger </h4>
                                            <span class="allergen"> [8],[2],[10]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€15.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Homemade Grilled lamb patty served with lettuce, onions, tomatoes, pickles, burger sauce in a bun, served with chips.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Menu Box End -->
                        <div class="menulist_box">
                            <h3 class="menusub_text">Kids</h3>
                            <ul>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Chicken Goujons </h4>
                                            <span class="allergen"> [8]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€8.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Chicken Goujons, served with fries.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Chicken Nuggets  </h4>
                                            <span class="allergen"> [8]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€8.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Chicken Nuggets, served with fries.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Bun Burger </h4>
                                            <span class="allergen"> [2],[4]</span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€8.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Beef Bun Burger with cheese, served with fries.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Chicken Shish on the Grill <span class="allergen"> [2],[4]</span></h4>

                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€9.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Boneless Chicken fillet grilled, marinated with saffron, served with salad.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        
                        <!-- Menu Box End -->
                        <div class="menulist_box">
                            <h3 class="menusub_text">Desserts</h3>
                            <div class="shish">
                                <p class="shi-p">All Desserts Served with Ice Cream and Whipped Cream.</p>
                            </div>
                            <ul>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Chocolate Brownie </h4>
                                            <span class="allergen"></span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€6.50</span>
                                    </div>
                                    <div class="description">
                                        <p>Warm Chocolate Brownie with chocolate topping.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Sticky Toffee Cake</h4>
                                            <span class="allergen"> </span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€6.95</span>
                                    </div>
                                    <div class="description">
                                        <p>Served with Toffee Sauce, the perfect Treat for the sweet tooth.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Apple Crumble </h4>
                                            <span class="allergen"> </span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€6.50</span>
                                    </div>
                                    <div class="description">
                                        <p>Served Warm.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mainCource">
                                        <div class="dishName">
                                            <h4>Cheese Cake </h4>
                                            <span class="allergen"> </span>
                                        </div>
                                        <div class="doted"></div>
                                        <span class="price">€6.50</span>
                                    </div>
                                    <div class="description">
                                        <p>Ask our staff for details.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="note">
                    <p>FOR ALL ALLERGEN INFORMATIONS PLEASE REFER THE NUMBER BESIDE MENU ITEM IN <span style="color: #ff4343;">RED</span> </p>
                    <p>Nuts (1) Gluten (2) Sesame Seeds (3) Dairy (4) Lupin (5) Crustaceans (6) Soya (7) Eggs (8) Peanuts (9) Mustard (10) Fish (11) Celery (12) Gram Flour (13) </p>
                    <p>Please Check with our Staff for more Allergens (14)</p>
                </div>
            </div>
        </div>
        <!-- Tab Content End -->
    </div>
</section>
<!-- Menu Section End -->

@endsection
