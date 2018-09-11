<div class="basket-summary__container js-basket-container wrapper">

        <!-- Summary breakdown -->
        <div class="basket-summary__breakdown">

            <h2 class="basket-summary__breakdown-title">Your holiday to [region]</h2>
            <p class="basket-summary__breakdown-details">for 2 Adults, 1 Child, 1 Infant for 10 nights from Wed 14 Jul 2017</p>
            <a href="#" class="basket-summary__included-btn basket-summary__included-btn--active js-basket-desktop-trigger">
                <span class="underline">What's included</span>
                <?php svg('arrow-down-bold', 12, 12, 'basket-summary__included-icon', ''); ?>
            </a>

            <div class="basket-summary__breakdown-content basket-summary__breakdown-content--visible js-basket-breakdown-content">
                <p class="basket-summary__breakdown-subtitle">Included in your holiday</p>

                <ul class="basket-summary__list">
                    <li class="basket-summary__list-item">
                        <?php svg('plane2', 12, 12, 'basket-summary__list-icon', ''); ?>
                        Return flights <a href="#" class="js-trigger-modal" data-modal-id="flight-information">Leeds Bradford Airport</a>
                    </li>
                    <li class="basket-summary__list-item">
                        <?php svg('luggage', 12, 12, 'basket-summary__list-icon', ''); ?>
                        (4) 10kg hand baggage
                    </li>
                    <li class="basket-summary__list-item">
                        <?php svg('suitcase', 12, 12, 'basket-summary__list-icon', ''); ?>
                        (2) 22kg checked-in bags
                    </li>
                    <li class="basket-summary__list-item">
                        <?php svg('hotel', 12, 12, 'basket-summary__list-icon', ''); ?>
                        Palladium Hotel Palmrya
                    </li>
                    <li class="basket-summary__list-item">
                        <?php svg('meal-bold', 12, 12, 'basket-summary__list-icon', ''); ?>
                        All inclusive
                    </li>
                    <li class="basket-summary__list-item">
                        <?php svg('key', 12, 12, 'basket-summary__list-icon', ''); ?>
                        (1) A room type
                    </li>
                    <li class="basket-summary__list-item">
                        <?php svg('bus', 12, 12, 'basket-summary__list-icon', ''); ?>
                        Included transfer type
                    </li>
                </ul>

                <hr class="basket-summary__breakdown-hr">

                <p class="basket-summary__breakdown-subtitle">Extra benefits and special offers</p>

                <ul class="basket-summary__list">
                    <li class="basket-summary__list-item">
                        <?php svg('smile', 12, 12, 'basket-summary__list-icon', ''); ?>
                        (1) Free Child place
                    </li>
                    <li class="basket-summary__list-item">
                        <?php svg('infant', 12, 12, 'basket-summary__list-icon', ''); ?>
                        (1) Free Infant place
                    </li>
                    <li class="basket-summary__list-item">
                        <?php svg('ticket', 12, 12, 'basket-summary__list-icon', ''); ?>
                        Excursion Name tickets
                    </li>
                    <li class="basket-summary__list-item">
                        <?php svg('resort-flight-checkin2', 12, 12, 'basket-summary__list-icon', ''); ?>
                        Resort Flight Check-In
                    </li>
                </ul>
                
                <hr class="basket-summary__breakdown-hr">

                <p class="basket-summary__breakdown-subtitle">Holiday Essentials</p>

                <ul class="basket-summary__list">
                    <li class="basket-summary__list-item">
                        <?php svg('tick', 12, 12, 'basket-summary__list-icon', ''); ?>
                        Hotel extras
                    </li>
                    <li class="basket-summary__list-item">
                        <?php svg('suitcase', 12, 12, 'basket-summary__list-icon', ''); ?>
                        (1) Additional checked-in bags
                    </li>
                    <li class="basket-summary__list-item">
                        <?php svg('golf', 12, 12, 'basket-summary__list-icon', ''); ?>
                        (1) Golf clubs
                    </li>
                </ul>
            </div>
        </div>

        <!-- Totals & Continue btn (which will be it's own component) -->
        <div class="basket-summary__totals">
                <div class="basket-summary__totals-top">

                <div class="basket-summary__ksp">
                    <?php svg('zero-card-fee', 30, 200, 'basket-summary__ksp-svg', '');?>
                </div>

                <div class="basket-summary__totals-block basket-summary__breakdown-content basket-summary__breakdown-content--visible js-basket-breakdown-content">

                    <div class="basket-summary__price-row">
                        <div class="basket-summary__price-item">Base price</div>
                        <div class="basket-summary__price-value">£1,470.00</div>
                    </div>

                    <div class="basket-summary__price-row">
                        <div class="basket-summary__price-item">Hotel extras</div>
                        <div class="basket-summary__price-value">£20.00</div>
                    </div>


                        <div class="basket-summary__price-row">
                            <div class="basket-summary__price-item">
                                <a href="#" class="basket-summary__essentials-btn js-basket-essentials-trigger"><span class="underline">Holiday Essentials</span> <?php svg('arrow-down-bold', 12, 12, 'basket-summary__essentials-icon', ''); ?></a>
                                </div>
                            <div class="basket-summary__price-value">£232</div>
                        </div>

                        <div class="basket-summary__essentials">
                            <div class="basket-summary__price-row">
                                <div class="basket-summary__price-item">Additional luggage</div>
                                <div class="basket-summary__price-value">£92.00</div>
                            </div>
                            <div class="basket-summary__price-row">
                                <div class="basket-summary__price-item">Sports equipment</div>
                                <div class="basket-summary__price-value">£120.00</div>
                            </div>
                            <div class="basket-summary__price-row">
                                <div class="basket-summary__price-item">2 x New transfer type</div>
                                <div class="basket-summary__price-value">£250.00</div>
                            </div>
                        </div>

                    <div class="basket-summary__price-row">
                        <div class="basket-summary__price-item">Card fee</div>
                        <div class="basket-summary__price-value">£5.00</div>
                    </div>

                    <div class="basket-summary__price-row basket-summary__price-row--discount">
                        <div class="basket-summary__price-item">Discount</div>
                        <div class="basket-summary__price-value">-£100.00</div>
                    </div>
                </div>
            </div>

            <div class="basket-summary__totals-block">

                <div class="basket-summary__price-row basket-summary__price-row--total">
                    <div class="basket-summary__price-item">
                        <?php svg('info', 12, 12, 'basket-summary__price-icon js-component-tooltip', 'data-tooltip-id="tooltip-basket-terms"'); ?>
                        Holiday price from
                    </div>
                    <div class="basket-summary__price-value basket-summary__price-value--total" data-js-basket-price>£1,370.<span class="pence">00</span></div>
                </div>

                <div class="basket-summary__price-row basket-summary__price-row--secure">
                    <div class="basket-summary__price-item"><?php svg('info', 12, 12, 'basket-summary__secure-icon js-component-tooltip', 'data-tooltip-id="tooltip-basket-terms"'); ?> Book today for just</div>
                    <div class="basket-summary__price-value">£180.00</div>
                </div>


                    <div class="basket-summary__continue">
                       <a href="" class="bttn bttn--primary bttn--full-width">Continue</a>
                    </div>

                    <p class="basket-summary__supplement-text small-text">Additional holiday / flight supplement may apply</p>

            </div>
        </div>

    </div>


</div>
