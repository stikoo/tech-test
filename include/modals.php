<div class="modal modal--wide" data-modal="recent-searches" data-component="Content/RichTextModal">
    <div class="modal__inner">
        <div class="modal__content">
            <div class="modal-box scroll" data-component="Content/TabbedLinks">
                <div class="js-tabs">
                  <div class="modal-box__top modal-box__recent-searches">
                      <div class="modal-box__heading">Recent Searches</div>
                      <button class="modal-box__button-close js-modal-close" type="button">
                          <?php echo svg('cancel', 18, 18, 'icon modal-box__icon-close icon icon--cancel', ''); ?>
                      </button>
                        <div class="recent-searches__header">
                            <div class="recent-searches__tabs-container js-tabs-nav">
                              <a href="#recent-hotels" class="recent-searches__hotel-tab js-searches-hotel-tab js-tabs-trigger is-active" role="tab">Hotels (2)</a>
                              <a href="#recent-searches" class="recent-searches__searches-tab js-searches-tab  js-tabs-trigger" role="tab">Searches (15)</a>
                            </div>
                        </div>
                  </div>
                  <div class="modal-box__content">
                      <?php include (__DIR__ . '/../Components/Content/RecentSearches/RecentSearches.php'); ?>
                  </div>
                </div>

                <div class="modal-box__close">
                    <a class="button button--base button--3d js-modal-close">Done</a>
                </div>

            </div>
        </div>
    </div>
</div>


<div class="modal" data-childcomponent="DepartureDateSelector" data-component="Content/RichTextModal" data-modal="DepartureDateSelector">
    <div class="modal__inner">
        <div class="modal__content">
            <div class="modal-box">
                <div class="modal-box__top">
                    <span class="villas-modal__back js-modal-back" style="display: none;"><span class="icon-chevron-left"><svg class="icon modal-box__arrow-left icon" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                    <use xlink:href="#icon-arrow-left" xmlns:xlink="http://www.w3.org/1999/xlink"></use></svg></span></span>
                    <div class="modal-box__heading title-m">
                        When do you want to go?
                    </div><button class="modal-box__button-close js-modal-close" type="button"><svg class="icon modal-box__icon-close icon icon--cancel" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                    <use xlink:href="#icon-cancel" xmlns:xlink="http://www.w3.org/1999/xlink"></use></svg></button>
                </div>
                <div class="modal-box__content">

                    <div data-component="Content/TabbedContent">
                        <div class="js-tabs">
                            <div class="js-tabs-nav">
                                <a href="#viewbymonth" class="js-tabs-trigger" href="javascript://">View by month</a> | <a href="#viewbyday" class="js-tabs-trigger" href="javascript://">View by day</a>
                            </div>

                            <br />

                            <div data-id="viewbymonth" role="tabpanel" aria-hidden="false">
                                <div class="sbm-leaving js-dates">
                                    <div class="sbm-leaving__heading title-m">
                                        2017
                                    </div>
                                    <div class="sbm-leaving__row">
                                        <div class="sbm-leaving__cell">
                                            <div class="month-box is-available" data-value="20170701">
                                                <div class="month-box__month">
                                                    Jul
                                                </div>
                                                <div class="month-box__year">
                                                    2017
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sbm-leaving__cell">
                                            <div class="month-box is-available" data-value="20170801">
                                                <div class="month-box__month">
                                                    Aug
                                                </div>
                                                <div class="month-box__year">
                                                    2017
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sbm-leaving__cell">
                                            <div class="month-box is-available" data-value="20170901">
                                                <div class="month-box__month">
                                                    Sep
                                                </div>
                                                <div class="month-box__year">
                                                    2017
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sbm-leaving__cell">
                                            <div class="month-box is-available" data-value="20171001">
                                                <div class="month-box__month">
                                                    Oct
                                                </div>
                                                <div class="month-box__year">
                                                    2017
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sbm-leaving__cell">
                                            <div class="month-box is-available" data-value="20171101">
                                                <div class="month-box__month">
                                                    Nov
                                                </div>
                                                <div class="month-box__year">
                                                    2017
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sbm-leaving__cell">
                                            <div class="month-box" data-value="20171201">
                                                <div class="month-box__month">
                                                    Dec
                                                </div>
                                                <div class="month-box__year">
                                                    2017
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sbm-leaving__heading title-m">
                                        2018
                                    </div>
                                    <div class="sbm-leaving__row">
                                        <div class="sbm-leaving__cell">
                                            <div class="month-box" data-value="20180101">
                                                <div class="month-box__month">
                                                    Jan
                                                </div>
                                                <div class="month-box__year">
                                                    2018
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sbm-leaving__cell">
                                            <div class="month-box is-available" data-value="20180201">
                                                <div class="month-box__month">
                                                    Feb
                                                </div>
                                                <div class="month-box__year">
                                                    2018
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sbm-leaving__cell">
                                            <div class="month-box is-available" data-value="20180301">
                                                <div class="month-box__month">
                                                    Mar
                                                </div>
                                                <div class="month-box__year">
                                                    2018
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sbm-leaving__cell">
                                            <div class="month-box is-available" data-value="20180401">
                                                <div class="month-box__month">
                                                    Apr
                                                </div>
                                                <div class="month-box__year">
                                                    2018
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sbm-leaving__cell">
                                            <div class="month-box is-available" data-value="20180501">
                                                <div class="month-box__month">
                                                    May
                                                </div>
                                                <div class="month-box__year">
                                                    2018
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sbm-leaving__cell">
                                            <div class="month-box is-available" data-value="20180601">
                                                <div class="month-box__month">
                                                    Jun
                                                </div>
                                                <div class="month-box__year">
                                                    2018
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sbm-leaving__cell">
                                            <div class="month-box is-available" data-value="20180701">
                                                <div class="month-box__month">
                                                    Jul
                                                </div>
                                                <div class="month-box__year">
                                                    2018
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sbm-leaving__cell">
                                            <div class="month-box is-available" data-value="20180801">
                                                <div class="month-box__month">
                                                    Aug
                                                </div>
                                                <div class="month-box__year">
                                                    2018
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sbm-leaving__cell">
                                            <div class="month-box is-available" data-value="20180901">
                                                <div class="month-box__month">
                                                    Sep
                                                </div>
                                                <div class="month-box__year">
                                                    2018
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sbm-leaving__cell">
                                            <div class="month-box is-available is-current" data-value="20181001">
                                                <div class="month-box__month">
                                                    Oct
                                                </div>
                                                <div class="month-box__year">
                                                    2018
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sbm-leaving__cell">
                                            <div class="month-box is-available" data-value="20181101">
                                                <div class="month-box__month">
                                                    Nov
                                                </div>
                                                <div class="month-box__year">
                                                    2018
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div data-id="viewbyday" role="tabpanel" aria-hidden="true">
                                <?php include(COMPONENTS_DIR . '/Content/CalendarView/CalendarViewSmall.php'); ?>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal" data-childcomponent="DestinationSelector" data-modal="DestinationSelector" data-component="Content/RichTextModal">
    <div class="modal__inner">
        <div class="modal__content">
            <div class="modal-box modal-box--no-scroll">
                <div class="modal-box__top">
                    <span class="villas-modal__back js-modal-back" style="display: none;"><span class="icon-chevron-left"><svg class="icon modal-box__arrow-left icon" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                    <use xlink:href="#icon-arrow-left" xmlns:xlink="http://www.w3.org/1999/xlink"></use></svg></span></span>
                    <div class="modal-box__heading title-m">
                        Select destinations
                    </div>
                    <button class="modal-box__button-close js-modal-close" type="button">
                        <?php svg('cancel', 18, 18, 'icon modal-box__icon-close icon icon--cancel', ''); ?>
                    </button>
                </div>

                <div class="modal-box__content">
                    <div class="sbm-destination">
                        <div class="js-tabs">
                            <div class="tabs-nav js-tabs-nav">
                                <a class="tabs-nav__link title-m js-tabs-trigger is-active" href="#bycountry">By country</a><!--
                                --><a class="tabs-nav__link title-m js-tabs-trigger" href="#bychar">All resorts A-Z</a>
                            </div>
                            <div aria-hidden="false" data-id="bycountry" role="tabpanel">
                                <div class="sbm-destination__container js-bycountry">
                                    <div class="sbm-destination__row" style="display:none">
                                        <div class="checkbox-button-group checkbox-button-group--double-level">
                                            <div class="checkbox-button-group__item js-all-destinations">
                                                <input class="checkbox-button-group__input" id="allDestinations" type="checkbox"> <label class="checkbox-button-group__label" for="allDestinations">All destinations</label>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="js-destinations">
                                        <div class="sbm-destination__row">
                                            <div class="sbm-destination__col1">
                                            <div class="checkbox-button-group checkbox-button-group--double-level">
                                                <div class="checkbox-button-group__item">
                                                    <input class="checkbox-button-group__input" id="reg_38" type="checkbox">
                                                    <label class="checkbox-button-group__label" for="reg_38">Balearics</label>
                                                </div>
                                                <div class="checkbox-button-group__item" data-airport="PMI" data-id="150">
                                                    <input class="checkbox-button-group__input" id="dest_150" type="checkbox">
                                                    <label class="checkbox-button-group__label" for="dest_150">Majorca</label>
                                                </div>
                                                <div class="checkbox-button-group__item" data-airport="MAH" data-id="151">
                                                    <input class="checkbox-button-group__input" id="dest_151" type="checkbox">
                                                    <label class="checkbox-button-group__label" for="dest_151">Menorca</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sbm-destination__col2">
                                            <div class="checkbox-button-group checkbox-button-group--double-level">
                                                <div class="checkbox-button-group__item">
                                                    <input class="checkbox-button-group__input" id="reg_39" type="checkbox">
                                                    <label class="checkbox-button-group__label" for="reg_39">Canary Islands</label>
                                                </div>
                                                <div class="checkbox-button-group__item" data-airport="FUE" data-id="152">
                                                    <input class="checkbox-button-group__input" id="dest_152" type="checkbox">
                                                    <label class="checkbox-button-group__label" for="dest_152">Fuerteventura</label>
                                                </div>
                                                <div class="checkbox-button-group__item" data-airport="ACE" data-id="154">
                                                    <input class="checkbox-button-group__input" id="dest_154" type="checkbox">
                                                    <label class="checkbox-button-group__label" for="dest_154">Lanzarote</label>
                                                </div>
                                                <div class="checkbox-button-group__item" data-airport="TFS" data-id="155">
                                                    <input class="checkbox-button-group__input" id="dest_155" type="checkbox">
                                                    <label class="checkbox-button-group__label" for="dest_155">Tenerife</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sbm-destination__row">
                                        <div class="sbm-destination__col1">
                                            <div class="checkbox-button-group checkbox-button-group--double-level">
                                                <div class="checkbox-button-group__item">
                                                    <input class="checkbox-button-group__input" id="reg_7" type="checkbox">
                                                    <label class="checkbox-button-group__label" for="reg_7">Croatia</label>
                                                </div>
                                                <div class="checkbox-button-group__item" data-airport="DBV" data-id="918">
                                                    <input class="checkbox-button-group__input" id="dest_918" type="checkbox">
                                                    <label class="checkbox-button-group__label" for="dest_918">Dubrovnik (Area of)</label>
                                                </div>
                                                <div class="checkbox-button-group__item" data-airport="PUY" data-id="1335">
                                                    <input class="checkbox-button-group__input" id="dest_1335" type="checkbox">
                                                    <label class="checkbox-button-group__label" for="dest_1335">Pula (Area of)</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sbm-destination__col2">
                                            <div class="checkbox-button-group checkbox-button-group--double-level">
                                                <div class="checkbox-button-group__item">
                                                    <input class="checkbox-button-group__input" id="reg_8" type="checkbox">
                                                    <label class="checkbox-button-group__label" for="reg_8">Cyprus</label>
                                                </div>
                                                <div class="checkbox-button-group__item" data-airport="LCA" data-id="892">
                                                    <input class="checkbox-button-group__input" id="dest_892" type="checkbox">
                                                    <label class="checkbox-button-group__label" for="dest_892">Larnaca Area</label>
                                                </div>
                                                <div class="checkbox-button-group__item" data-airport="PFO" data-id="69">
                                                    <input class="checkbox-button-group__input" id="dest_69" type="checkbox">
                                                    <label class="checkbox-button-group__label" for="dest_69">Paphos Area</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sbm-destination__row">
                                        <div class="sbm-destination__col1">
                                            <div class="checkbox-button-group checkbox-button-group--double-level">
                                                <div class="checkbox-button-group__item">
                                                    <input class="checkbox-button-group__input" id="reg_16" type="checkbox">
                                                    <label class="checkbox-button-group__label" for="reg_16">Greece</label>
                                                </div>
                                                <div class="checkbox-button-group__item" data-airport="CFU" data-id="94">
                                                    <input class="checkbox-button-group__input" id="dest_94" type="checkbox">
                                                    <label class="checkbox-button-group__label" for="dest_94">Corfu</label>
                                                </div>
                                                <div class="checkbox-button-group__item" data-airport="HER" data-id="95">
                                                    <input class="checkbox-button-group__input" id="dest_95" type="checkbox">
                                                    <label class="checkbox-button-group__label" for="dest_95">Crete</label>
                                                </div>
                                                <div class="checkbox-button-group__item" data-airport="EFL" data-id="98">
                                                    <input class="checkbox-button-group__input" id="dest_98" type="checkbox">
                                                    <label class="checkbox-button-group__label" for="dest_98">Kefalonia</label>
                                                </div>
                                                <div class="checkbox-button-group__item" data-airport="RHO" data-id="103">
                                                    <input class="checkbox-button-group__input" id="dest_103" type="checkbox">
                                                    <label class="checkbox-button-group__label" for="dest_103">Rhodes</label>
                                                </div>
                                                <div class="checkbox-button-group__item" data-airport="ZTH" data-id="1364">
                                                    <input class="checkbox-button-group__input" id="dest_1364" type="checkbox">
                                                    <label class="checkbox-button-group__label" for="dest_1364">Zante</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sbm-destination__col2">
                                            <div class="checkbox-button-group checkbox-button-group--double-level">
                                                <div class="checkbox-button-group__item">
                                                    <input class="checkbox-button-group__input" id="reg_32" type="checkbox">
                                                    <label class="checkbox-button-group__label" for="reg_32">Portugal</label>
                                                </div>
                                                <div class="checkbox-button-group__item" data-airport="FAO" data-id="139">
                                                    <input class="checkbox-button-group__input" id="dest_139" type="checkbox">
                                                    <label class="checkbox-button-group__label" for="dest_139">Algarve</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sbm-destination__row">
                                        <div class="sbm-destination__col1">
                                            <div class="checkbox-button-group checkbox-button-group--double-level">
                                                <div class="checkbox-button-group__item">
                                                    <input class="checkbox-button-group__input" id="reg_37" type="checkbox">
                                                    <label class="checkbox-button-group__label" for="reg_37">Spain</label>
                                                </div>
                                                <div class="checkbox-button-group__item" data-airport="ALC" data-id="156">
                                                    <input class="checkbox-button-group__input" id="dest_156" type="checkbox">
                                                    <label class="checkbox-button-group__label" for="dest_156">Costa Blanca</label>
                                                </div>
                                                <div class="checkbox-button-group__item" data-airport="GRO" data-id="157">
                                                    <input class="checkbox-button-group__input" id="dest_157" type="checkbox">
                                                    <label class="checkbox-button-group__label" for="dest_157">Costa Brava</label>
                                                </div>
                                                <div class="checkbox-button-group__item" data-airport="AGP" data-id="160">
                                                    <input class="checkbox-button-group__input" id="dest_160" type="checkbox">
                                                    <label class="checkbox-button-group__label" for="dest_160">Costa Del Sol</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sbm-destination__col2">
                                            <div class="checkbox-button-group checkbox-button-group--double-level">
                                                <div class="checkbox-button-group__item">
                                                    <input class="checkbox-button-group__input" id="reg_43" type="checkbox">
                                                    <label class="checkbox-button-group__label" for="reg_43">Turkey</label>
                                                </div>
                                                <div class="checkbox-button-group__item" data-airport="AYT" data-id="1424">
                                                    <input class="checkbox-button-group__input" id="dest_1424" type="checkbox">
                                                    <label class="checkbox-button-group__label" for="dest_1424">Antalya Area</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div aria-hidden="true" data-id="bychar" role="tabpanel">
                                <div class="sbm-destination__container js-atoz">
                                    <div class="sbm-destination__list">
                                        <div class="sbm-destination__list-item">
                                            <div class="sbm-destination__label">
                                                <span class="sbm-destination__char title-m">A</span>
                                            </div>
                                            <div class="sbm-destination__list-content">
                                                <div class="checkbox-button-group">
                                                    <div class="checkbox-button-group__item" data-airport="" data-id="139">
                                                        <input class="checkbox-button-group__input" id="az_dest_139" type="checkbox"> <label class="checkbox-button-group__label" for="az_dest_139">Algarve (Portugal)</label>
                                                    </div>
                                                    <div class="checkbox-button-group__item" data-airport="" data-id="1424">
                                                        <input class="checkbox-button-group__input" id="az_dest_1424" type="checkbox"> <label class="checkbox-button-group__label" for="az_dest_1424">Antalya Area (Turkey)</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sbm-destination__list-item">
                                            <div class="sbm-destination__label">
                                                <span class="sbm-destination__char title-m">C</span>
                                            </div>
                                            <div class="sbm-destination__list-content">
                                                <div class="checkbox-button-group">
                                                    <div class="checkbox-button-group__item" data-airport="" data-id="94">
                                                        <input class="checkbox-button-group__input" id="az_dest_94" type="checkbox"> <label class="checkbox-button-group__label" for="az_dest_94">Corfu (Greece)</label>
                                                    </div>
                                                    <div class="checkbox-button-group__item" data-airport="" data-id="95">
                                                        <input class="checkbox-button-group__input" id="az_dest_95" type="checkbox"> <label class="checkbox-button-group__label" for="az_dest_95">Crete (Greece)</label>
                                                    </div>
                                                    <div class="checkbox-button-group__item" data-airport="" data-id="156">
                                                        <input class="checkbox-button-group__input" id="az_dest_156" type="checkbox"> <label class="checkbox-button-group__label" for="az_dest_156">Costa Blanca (Spain)</label>
                                                    </div>
                                                    <div class="checkbox-button-group__item" data-airport="" data-id="157">
                                                        <input class="checkbox-button-group__input" id="az_dest_157" type="checkbox"> <label class="checkbox-button-group__label" for="az_dest_157">Costa Brava (Spain)</label>
                                                    </div>
                                                    <div class="checkbox-button-group__item" data-airport="" data-id="160">
                                                        <input class="checkbox-button-group__input" id="az_dest_160" type="checkbox"> <label class="checkbox-button-group__label" for="az_dest_160">Costa Del Sol (Spain)</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sbm-destination__list-item">
                                            <div class="sbm-destination__label">
                                                <span class="sbm-destination__char title-m">D</span>
                                            </div>
                                            <div class="sbm-destination__list-content">
                                                <div class="checkbox-button-group">
                                                    <div class="checkbox-button-group__item" data-airport="" data-id="918">
                                                        <input class="checkbox-button-group__input" id="az_dest_918" type="checkbox"> <label class="checkbox-button-group__label" for="az_dest_918">Dubrovnik (Area of) (Croatia)</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sbm-destination__list-item">
                                            <div class="sbm-destination__label">
                                                <span class="sbm-destination__char title-m">F</span>
                                            </div>
                                            <div class="sbm-destination__list-content">
                                                <div class="checkbox-button-group">
                                                    <div class="checkbox-button-group__item" data-airport="" data-id="152">
                                                        <input class="checkbox-button-group__input" id="az_dest_152" type="checkbox"> <label class="checkbox-button-group__label" for="az_dest_152">Fuerteventura (Canary Islands)</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sbm-destination__list-item">
                                            <div class="sbm-destination__label">
                                                <span class="sbm-destination__char title-m">K</span>
                                            </div>
                                            <div class="sbm-destination__list-content">
                                                <div class="checkbox-button-group">
                                                    <div class="checkbox-button-group__item" data-airport="" data-id="98">
                                                        <input class="checkbox-button-group__input" id="az_dest_98" type="checkbox"> <label class="checkbox-button-group__label" for="az_dest_98">Kefalonia (Greece)</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sbm-destination__list-item">
                                            <div class="sbm-destination__label">
                                                <span class="sbm-destination__char title-m">L</span>
                                            </div>
                                            <div class="sbm-destination__list-content">
                                                <div class="checkbox-button-group">
                                                    <div class="checkbox-button-group__item" data-airport="" data-id="154">
                                                        <input class="checkbox-button-group__input" id="az_dest_154" type="checkbox"> <label class="checkbox-button-group__label" for="az_dest_154">Lanzarote (Canary Islands)</label>
                                                    </div>
                                                    <div class="checkbox-button-group__item" data-airport="" data-id="892">
                                                        <input class="checkbox-button-group__input" id="az_dest_892" type="checkbox"> <label class="checkbox-button-group__label" for="az_dest_892">Larnaca Area (Cyprus)</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sbm-destination__list-item">
                                            <div class="sbm-destination__label">
                                                <span class="sbm-destination__char title-m">M</span>
                                            </div>
                                            <div class="sbm-destination__list-content">
                                                <div class="checkbox-button-group">
                                                    <div class="checkbox-button-group__item" data-airport="" data-id="150">
                                                        <input class="checkbox-button-group__input" id="az_dest_150" type="checkbox"> <label class="checkbox-button-group__label" for="az_dest_150">Majorca (Balearics)</label>
                                                    </div>
                                                    <div class="checkbox-button-group__item" data-airport="" data-id="151">
                                                        <input class="checkbox-button-group__input" id="az_dest_151" type="checkbox"> <label class="checkbox-button-group__label" for="az_dest_151">Menorca (Balearics)</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sbm-destination__list-item">
                                            <div class="sbm-destination__label">
                                                <span class="sbm-destination__char title-m">P</span>
                                            </div>
                                            <div class="sbm-destination__list-content">
                                                <div class="checkbox-button-group">
                                                    <div class="checkbox-button-group__item" data-airport="" data-id="1335">
                                                        <input class="checkbox-button-group__input" id="az_dest_1335" type="checkbox"> <label class="checkbox-button-group__label" for="az_dest_1335">Pula (Area of) (Croatia)</label>
                                                    </div>
                                                    <div class="checkbox-button-group__item" data-airport="" data-id="69">
                                                        <input class="checkbox-button-group__input" id="az_dest_69" type="checkbox"> <label class="checkbox-button-group__label" for="az_dest_69">Paphos Area (Cyprus)</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sbm-destination__list-item">
                                            <div class="sbm-destination__label">
                                                <span class="sbm-destination__char title-m">R</span>
                                            </div>
                                            <div class="sbm-destination__list-content">
                                                <div class="checkbox-button-group">
                                                    <div class="checkbox-button-group__item" data-airport="" data-id="103">
                                                        <input class="checkbox-button-group__input" id="az_dest_103" type="checkbox"> <label class="checkbox-button-group__label" for="az_dest_103">Rhodes (Greece)</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sbm-destination__list-item">
                                            <div class="sbm-destination__label">
                                                <span class="sbm-destination__char title-m">T</span>
                                            </div>
                                            <div class="sbm-destination__list-content">
                                                <div class="checkbox-button-group">
                                                    <div class="checkbox-button-group__item" data-airport="" data-id="155">
                                                        <input class="checkbox-button-group__input" id="az_dest_155" type="checkbox"> <label class="checkbox-button-group__label" for="az_dest_155">Tenerife (Canary Islands)</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sbm-destination__list-item">
                                            <div class="sbm-destination__label">
                                                <span class="sbm-destination__char title-m">Z</span>
                                            </div>
                                            <div class="sbm-destination__list-content">
                                                <div class="checkbox-button-group">
                                                    <div class="checkbox-button-group__item" data-airport="" data-id="1364">
                                                        <input class="checkbox-button-group__input" id="az_dest_1364" type="checkbox"> <label class="checkbox-button-group__label" for="az_dest_1364">Zante (Greece)</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-box__close">
                    <a class="button button--base button--3d js-modal-close">Done</a>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="modal" data-component="Content/RichTextModal" data-modal="guests" data-childcomponent="GuestSelector" data-settings="{&quot;minimumChildAge&quot;:1,&quot;maximumChildAge&quot;:17,&quot;infantLabel&quot;:&quot;Under 2&quot;,&quot;ageLabel&quot;:&quot;Age&quot;,&quot;childLabel&quot;:&quot;Child&quot;,&quot;maxNumOfAdults&quot;:15,&quot;maxNumOfChildren&quot;:15,&quot;maxNumberOfAdultsAndChildren&quot;:19,&quot;maxNumOfRooms&quot;:9}">
    <div class="modal__inner">
        <div class="modal__content">
            <div class="modal-box">
                <div class="modal-box__top">
                    <span class="villas-modal__back js-modal-back" style="display: none;"><span class="icon-chevron-left"><svg class="icon modal-box__arrow-left icon" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                    <use xlink:href="#icon-arrow-left" xmlns:xlink="http://www.w3.org/1999/xlink"></use></svg></span></span>
                    <div class="modal-box__heading title-m">
                         Guests
                    </div><button class="modal-box__button-close js-modal-close" type="button"><svg class="icon modal-box__icon-close icon icon--cancel" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                    <use xlink:href="#icon-cancel" xmlns:xlink="http://www.w3.org/1999/xlink"></use></svg></button>
                </div>
                <div class="modal-box__content">

                    <div class="form-validation form-validation--error margin--bottom">
                        <div class="form-validation__inner">
                            <div class="form-validation__heading">
                                <?php echo svg('error', 18, 18, 'form-validation__heading-icon', ''); ?>
                                We'd love to let you continue.
                            </div>
                            <p class="form-validation__intro">But first, please provide ages for all your child places.</p>
                        </div>
                    </div>

                    <div class="sbm-guests">
                        <div class="sbm-guests__rooms">
                            <div class="sbm-guests__count-row">
                                <div class="sbm-guests__count-box sbm-guests__count-box--wide">
                                    <div class="sbm-guests__rooms--title">
                                        Guests
                                    </div>
                                    <div class="sbm-guests__count sbm-guests__count--half form-count js-form-count">
                                        <button class="form-count__minus js-minus-room-btn" type="button"><svg class="modal-box__icon-close icon icon--minus" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                        <use xlink:href="#icon-minus" xmlns:xlink="http://www.w3.org/1999/xlink"></use></svg></button> <input class="form-count__input js-room-count" data-max="12" data-min="0" readonly type="text" value="1"> <button class="form-count__plus js-plus-room-btn" type="button"><svg class="modal-box__icon-close icon icon--plus" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                        <use xlink:href="#icon-plus" xmlns:xlink="http://www.w3.org/1999/xlink"></use></svg></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sbm-guests__wrapper">
                            <div class="sbm-guests__title">Please Select</div>
                            <div class="sbm-guests__inner">
                                <div class="sbm-guests__count-row">
                                    <div class="sbm-guests__count-box">
                                        <div>
                                            <span class="sbm-guests__count-box--title">Adults&nbsp;</span> <strong class="title-tiny">(18 and over*)</strong>
                                        </div>
                                        <div class="sbm-guests__count form-count js-form-count">
                                            <button class="form-count__minus js-minus-adult-btn" type="button"><svg class="modal-box__icon-close icon icon--minus" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                            <use xlink:href="#icon-minus" xmlns:xlink="http://www.w3.org/1999/xlink"></use></svg></button> <input class="form-count__input js-adult-count" data-max="15" data-min="1" min="1" readonly type="text" value="1"> <button class="form-count__plus js-plus-adult-btn" type="button"><svg class="modal-box__icon-close icon icon--plus" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                            <use xlink:href="#icon-plus" xmlns:xlink="http://www.w3.org/1999/xlink"></use></svg></button>
                                        </div>
                                    </div>
                                    <div class="sbm-guests__count-box">
                                        <div>
                                            <span class="sbm-guests__count-box--title">Children&nbsp;</span> <strong class="title-tiny">(Under 18*)</strong>
                                        </div>
                                        <div class="sbm-guests__count form-count js-form-count js-form-children-logic">
                                            <button class="form-count__minus js-minus-child-btn" type="button"><svg class="modal-box__icon-close icon icon--minus" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                            <use xlink:href="#icon-minus" xmlns:xlink="http://www.w3.org/1999/xlink"></use></svg></button> <input class="form-count__input js-child-count" data-max="7" data-min="0" readonly type="text" value="0"> <button class="form-count__plus js-plus-child-btn" type="button"><svg class="modal-box__icon-close icon icon--plus" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                            <use xlink:href="#icon-plus" xmlns:xlink="http://www.w3.org/1999/xlink"></use></svg></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="sbm-guests__panel js-child-ages-panel">
                                    <div class="sbm-guests__panel--title">
                                        Please select* <span>(Ages on date of return)</span>
                                    </div>
                                    <div class="sbm-guests__boxes js-child-box-container"></div>
                                </div>
                            </div>
                        </div>
                        <div class="sbm-guests__optional">
                            <div class="sbm-guests__count-row">
                                <div class="sbm-guests__count-box sbm-guests__count-box--wide">
                                    <div>
                                        <span class="sbm-guests__optional--title">Minimum number of bedrooms*</span>
                                    </div>
                                    <div class="sbm-guests__count sbm-guests__count--half form-count js-form-count">
                                        <button class="form-count__minus js-minus-room-btn" type="button"><svg class="modal-box__icon-close icon icon--minus" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                        <use xlink:href="#icon-minus" xmlns:xlink="http://www.w3.org/1999/xlink"></use></svg></button> <input class="form-count__input js-room-count" data-max="12" data-min="0" readonly type="text" value="1"> <button class="form-count__plus js-plus-room-btn" type="button"><svg class="modal-box__icon-close icon icon--plus" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                        <use xlink:href="#icon-plus" xmlns:xlink="http://www.w3.org/1999/xlink"></use></svg></button>
                                    </div>
                                    <span class="sbm-guests__optional--text">(optional)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-box__close">
                    <a class="button button--base button--3d js-modal-close">Done</a>
                </div>
            </div>
        </div>
    </div>
</div>





<div class="modal" data-childcomponent="DepartureAirportSelector" data-modal="DepartureAirportSelector" data-component="Content/RichTextModal">
    <div class="modal__inner">
        <div class="modal__content">
            <div class="modal-box">
                <div class="modal-box__top">
                    <span class="villas-modal__back js-modal-back" style="display: none;"><span class="icon-chevron-left"><svg class="icon modal-box__arrow-left icon" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                    <use xlink:href="#icon-arrow-left" xmlns:xlink="http://www.w3.org/1999/xlink"></use></svg></span></span>
                    <div class="modal-box__heading title-m">
                        Select departures
                    </div><button class="modal-box__button-close js-modal-close" type="button"><svg class="icon modal-box__icon-close icon icon--cancel" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                    <use xlink:href="#icon-cancel" xmlns:xlink="http://www.w3.org/1999/xlink"></use></svg></button>
                </div>
                <div class="modal-box__content">
                    <div class="sbm-departure">
                        <div class="checkbox-button-group checkbox-button-group--list">
                            <div class="checkbox-button-group__item" data-airport-code="BFS">
                                <input class="checkbox-button-group__input" id="departure_bfs" type="checkbox"> <label class="checkbox-button-group__label" for="departure_bfs"><span class="checkbox-button-group__text-highlighted">Belfast</span> (BFS)</label>
                            </div>
                            <div class="checkbox-button-group__item" data-airport-code="BHX">
                                <input class="checkbox-button-group__input" id="departure_bhx" type="checkbox"> <label class="checkbox-button-group__label" for="departure_bhx"><span class="checkbox-button-group__text-highlighted">Birmingham</span> (BHX)</label>
                            </div>
                            <div class="checkbox-button-group__item" data-airport-code="EMA">
                                <input class="checkbox-button-group__input" id="departure_ema" type="checkbox"> <label class="checkbox-button-group__label" for="departure_ema"><span class="checkbox-button-group__text-highlighted">East Midlands</span> (EMA)</label>
                            </div>
                            <div class="checkbox-button-group__item" data-airport-code="EDI">
                                <input class="checkbox-button-group__input" id="departure_edi" type="checkbox"> <label class="checkbox-button-group__label" for="departure_edi"><span class="checkbox-button-group__text-highlighted">Edinburgh</span> (EDI)</label>
                            </div>
                            <div class="checkbox-button-group__item" data-airport-code="GLA">
                                <input class="checkbox-button-group__input" id="departure_gla" type="checkbox"> <label class="checkbox-button-group__label" for="departure_gla"><span class="checkbox-button-group__text-highlighted">Glasgow Intl</span> (GLA)</label>
                            </div>
                            <div class="checkbox-button-group__item" data-airport-code="LBA">
                                <input class="checkbox-button-group__input" id="departure_lba" type="checkbox"> <label class="checkbox-button-group__label" for="departure_lba"><span class="checkbox-button-group__text-highlighted">Leeds Bradford</span> (LBA)</label>
                            </div>
                            <div class="checkbox-button-group__item" data-airport-code="STN">
                                <input class="checkbox-button-group__input" id="departure_stn" type="checkbox"> <label class="checkbox-button-group__label" for="departure_stn"><span class="checkbox-button-group__text-highlighted">London Stansted</span> (STN)</label>
                            </div>
                            <div class="checkbox-button-group__item" data-airport-code="MAN">
                                <input class="checkbox-button-group__input" id="departure_man" type="checkbox"> <label class="checkbox-button-group__label" for="departure_man"><span class="checkbox-button-group__text-highlighted">Manchester</span> (MAN)</label>
                            </div>
                            <div class="checkbox-button-group__item" data-airport-code="NCL">
                                <input class="checkbox-button-group__input" id="departure_ncl" type="checkbox"> <label class="checkbox-button-group__label" for="departure_ncl"><span class="checkbox-button-group__text-highlighted">Newcastle</span> (NCL)</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-box__close">
                    <a class="button button--base button--3d js-modal-close">Done</a>
                </div>
            </div>
        </div>
    </div>
</div>






<div class="modal" data-modal="terms-and-conditions" data-component="Content/RichTextModal">
    <div class="modal__inner">
        <div class="modal__content">
            <div class="modal-box">
                <div class="modal-box__top">
                    <div class="modal-box__heading">terms and conditions</div>
                    <button class="modal-box__button-close js-modal-close" type="button">
                        <?php echo svg('cancel', 18, 18, 'icon modal-box__icon-close icon icon--cancel', ''); ?>
                    </button>
                </div>
                <div class="modal-box__content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse neque augue, consequat quis dolor ac, porttitor gravida augue. Praesent venenatis turpis sit amet nunc sodales consectetur. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed efficitur a erat sed ornare. Praesent vehicula metus quis efficitur lobortis. Nulla mattis diam non luctus tincidunt. In tempus vel lacus a interdum. Phasellus semper porta urna, id dapibus urna dignissim ut. Etiam cursus viverra felis, eu finibus ipsum fringilla in. Pellentesque lacus orci, egestas id placerat at, sodales molestie odio. Donec mattis tortor eget purus pulvinar, non ornare urna egestas. Ut ullamcorper tortor ac dolor elementum mattis. Integer posuere libero elit, a sagittis elit tempus fringilla. Praesent id porta ipsum, malesuada aliquet urna.</p>
                    <p>Cras facilisis quis eros et tincidunt. Vivamus nulla magna, commodo a aliquam ut, finibus sed nulla. Morbi lacinia risus scelerisque leo fermentum consectetur. Maecenas convallis diam viverra dui pellentesque lobortis. Morbi consequat feugiat sem, in dignissim ante pharetra sed. Sed nisi est, ornare ac vehicula sed, varius ut dolor. Sed ultricies tincidunt porta.</p>
                    <p>Donec ornare risus non dui rhoncus fermentum. Fusce blandit nisl sit amet turpis ultricies sagittis. Praesent imperdiet convallis eros, sit amet auctor eros finibus at. Praesent malesuada, ligula quis vulputate iaculis, ligula tellus convallis risus, et tincidunt nisl augue eget justo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi nec magna mattis, congue dolor sollicitudin, ultricies arcu. Etiam egestas eget dui vel sodales. Nam semper tortor eros, vitae placerat nibh ornare sit amet.</p>
                    <h2>Lorem Ipsum</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse neque augue, consequat quis dolor ac, porttitor gravida augue. Praesent venenatis turpis sit amet nunc sodales consectetur. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed efficitur a erat sed ornare. Praesent vehicula metus quis efficitur lobortis. Nulla mattis diam non luctus tincidunt. In tempus vel lacus a interdum. Phasellus semper porta urna, id dapibus urna dignissim ut. Etiam cursus viverra felis, eu finibus ipsum fringilla in. Pellentesque lacus orci, egestas id placerat at, sodales molestie odio. Donec mattis tortor eget purus pulvinar, non ornare urna egestas. Ut ullamcorper tortor ac dolor elementum mattis. Integer posuere libero elit, a sagittis elit tempus fringilla. Praesent id porta ipsum, malesuada aliquet urna.</p>
                    <p>Cras facilisis quis eros et tincidunt. Vivamus nulla magna, commodo a aliquam ut, finibus sed nulla. Morbi lacinia risus scelerisque leo fermentum consectetur. Maecenas convallis diam viverra dui pellentesque lobortis. Morbi consequat feugiat sem, in dignissim ante pharetra sed. Sed nisi est, ornare ac vehicula sed, varius ut dolor. Sed ultricies tincidunt porta.</p>
                    <p>Donec ornare risus non dui rhoncus fermentum. Fusce blandit nisl sit amet turpis ultricies sagittis. Praesent imperdiet convallis eros, sit amet auctor eros finibus at. Praesent malesuada, ligula quis vulputate iaculis, ligula tellus convallis risus, et tincidunt nisl augue eget justo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi nec magna mattis, congue dolor sollicitudin, ultricies arcu. Etiam egestas eget dui vel sodales. Nam semper tortor eros, vitae placerat nibh ornare sit amet.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal modal--wide" data-modal="dangerous-goods" data-component="Content/RichTextModal">
    <div class="modal__inner">
        <div class="modal__content">
            <div class="modal-box">
                <div class="modal-box__top">
                    <div class="modal-box__heading">Dangerous Goods</div>
                    <button class="modal-box__button-close js-modal-close" type="button">
                        <?php echo svg('cancel', 18, 18, 'icon modal-box__icon-close icon icon--cancel', ''); ?>
                    </button>
                </div>
                <div class="modal-box__content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse neque augue, consequat quis dolor ac, porttitor gravida augue. Praesent venenatis turpis sit amet nunc sodales consectetur. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed efficitur a erat sed ornare. Praesent vehicula metus quis efficitur lobortis. Nulla mattis diam non luctus tincidunt. In tempus vel lacus a interdum. Phasellus semper porta urna, id dapibus urna dignissim ut. Etiam cursus viverra felis, eu finibus ipsum fringilla in. Pellentesque lacus orci, egestas id placerat at, sodales molestie odio. Donec mattis tortor eget purus pulvinar, non ornare urna egestas. Ut ullamcorper tortor ac dolor elementum mattis. Integer posuere libero elit, a sagittis elit tempus fringilla. Praesent id porta ipsum, malesuada aliquet urna.</p>
                    <p>Cras facilisis quis eros et tincidunt. Vivamus nulla magna, commodo a aliquam ut, finibus sed nulla. Morbi lacinia risus scelerisque leo fermentum consectetur. Maecenas convallis diam viverra dui pellentesque lobortis. Morbi consequat feugiat sem, in dignissim ante pharetra sed. Sed nisi est, ornare ac vehicula sed, varius ut dolor. Sed ultricies tincidunt porta.</p>
                    <p>Donec ornare risus non dui rhoncus fermentum. Fusce blandit nisl sit amet turpis ultricies sagittis. Praesent imperdiet convallis eros, sit amet auctor eros finibus at. Praesent malesuada, ligula quis vulputate iaculis, ligula tellus convallis risus, et tincidunt nisl augue eget justo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi nec magna mattis, congue dolor sollicitudin, ultricies arcu. Etiam egestas eget dui vel sodales. Nam semper tortor eros, vitae placerat nibh ornare sit amet.</p>
                    <h2>Lorem Ipsum</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse neque augue, consequat quis dolor ac, porttitor gravida augue. Praesent venenatis turpis sit amet nunc sodales consectetur. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed efficitur a erat sed ornare. Praesent vehicula metus quis efficitur lobortis. Nulla mattis diam non luctus tincidunt. In tempus vel lacus a interdum. Phasellus semper porta urna, id dapibus urna dignissim ut. Etiam cursus viverra felis, eu finibus ipsum fringilla in. Pellentesque lacus orci, egestas id placerat at, sodales molestie odio. Donec mattis tortor eget purus pulvinar, non ornare urna egestas. Ut ullamcorper tortor ac dolor elementum mattis. Integer posuere libero elit, a sagittis elit tempus fringilla. Praesent id porta ipsum, malesuada aliquet urna.</p>
                    <p>Cras facilisis quis eros et tincidunt. Vivamus nulla magna, commodo a aliquam ut, finibus sed nulla. Morbi lacinia risus scelerisque leo fermentum consectetur. Maecenas convallis diam viverra dui pellentesque lobortis. Morbi consequat feugiat sem, in dignissim ante pharetra sed. Sed nisi est, ornare ac vehicula sed, varius ut dolor. Sed ultricies tincidunt porta.</p>
                    <p>Donec ornare risus non dui rhoncus fermentum. Fusce blandit nisl sit amet turpis ultricies sagittis. Praesent imperdiet convallis eros, sit amet auctor eros finibus at. Praesent malesuada, ligula quis vulputate iaculis, ligula tellus convallis risus, et tincidunt nisl augue eget justo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi nec magna mattis, congue dolor sollicitudin, ultricies arcu. Etiam egestas eget dui vel sodales. Nam semper tortor eros, vitae placerat nibh ornare sit amet.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse neque augue, consequat quis dolor ac, porttitor gravida augue. Praesent venenatis turpis sit amet nunc sodales consectetur. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed efficitur a erat sed ornare. Praesent vehicula metus quis efficitur lobortis. Nulla mattis diam non luctus tincidunt. In tempus vel lacus a interdum. Phasellus semper porta urna, id dapibus urna dignissim ut. Etiam cursus viverra felis, eu finibus ipsum fringilla in. Pellentesque lacus orci, egestas id placerat at, sodales molestie odio. Donec mattis tortor eget purus pulvinar, non ornare urna egestas. Ut ullamcorper tortor ac dolor elementum mattis. Integer posuere libero elit, a sagittis elit tempus fringilla. Praesent id porta ipsum, malesuada aliquet urna.</p>
                    <p>Cras facilisis quis eros et tincidunt. Vivamus nulla magna, commodo a aliquam ut, finibus sed nulla. Morbi lacinia risus scelerisque leo fermentum consectetur. Maecenas convallis diam viverra dui pellentesque lobortis. Morbi consequat feugiat sem, in dignissim ante pharetra sed. Sed nisi est, ornare ac vehicula sed, varius ut dolor. Sed ultricies tincidunt porta.</p>
                    <p>Donec ornare risus non dui rhoncus fermentum. Fusce blandit nisl sit amet turpis ultricies sagittis. Praesent imperdiet convallis eros, sit amet auctor eros finibus at. Praesent malesuada, ligula quis vulputate iaculis, ligula tellus convallis risus, et tincidunt nisl augue eget justo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi nec magna mattis, congue dolor sollicitudin, ultricies arcu. Etiam egestas eget dui vel sodales. Nam semper tortor eros, vitae placerat nibh ornare sit amet.</p>
                    <h2>Lorem Ipsum</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse neque augue, consequat quis dolor ac, porttitor gravida augue. Praesent venenatis turpis sit amet nunc sodales consectetur. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed efficitur a erat sed ornare. Praesent vehicula metus quis efficitur lobortis. Nulla mattis diam non luctus tincidunt. In tempus vel lacus a interdum. Phasellus semper porta urna, id dapibus urna dignissim ut. Etiam cursus viverra felis, eu finibus ipsum fringilla in. Pellentesque lacus orci, egestas id placerat at, sodales molestie odio. Donec mattis tortor eget purus pulvinar, non ornare urna egestas. Ut ullamcorper tortor ac dolor elementum mattis. Integer posuere libero elit, a sagittis elit tempus fringilla. Praesent id porta ipsum, malesuada aliquet urna.</p>
                    <p>Cras facilisis quis eros et tincidunt. Vivamus nulla magna, commodo a aliquam ut, finibus sed nulla. Morbi lacinia risus scelerisque leo fermentum consectetur. Maecenas convallis diam viverra dui pellentesque lobortis. Morbi consequat feugiat sem, in dignissim ante pharetra sed. Sed nisi est, ornare ac vehicula sed, varius ut dolor. Sed ultricies tincidunt porta.</p>
                    <p>Donec ornare risus non dui rhoncus fermentum. Fusce blandit nisl sit amet turpis ultricies sagittis. Praesent imperdiet convallis eros, sit amet auctor eros finibus at. Praesent malesuada, ligula quis vulputate iaculis, ligula tellus convallis risus, et tincidunt nisl augue eget justo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi nec magna mattis, congue dolor sollicitudin, ultricies arcu. Etiam egestas eget dui vel sodales. Nam semper tortor eros, vitae placerat nibh ornare sit amet.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" data-modal="insurance-terms" data-component="Content/RichTextModal">
    <div class="modal__inner">
        <div class="modal__content">
            <div class="modal-box">
                <div class="modal-box__top">
                    <div class="modal-box__heading">Insurance Terms</div>
                    <button class="modal-box__button-close js-modal-close" type="button">
                        <?php echo svg('cancel', 18, 18, 'icon modal-box__icon-close icon icon--cancel', ''); ?>
                    </button>
                </div>
                <div class="modal-box__content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse neque augue, consequat quis dolor ac, porttitor gravida augue. Praesent venenatis turpis sit amet nunc sodales consectetur. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed efficitur a erat sed ornare. Praesent vehicula metus quis efficitur lobortis. Nulla mattis diam non luctus tincidunt. In tempus vel lacus a interdum. Phasellus semper porta urna, id dapibus urna dignissim ut. Etiam cursus viverra felis, eu finibus ipsum fringilla in. Pellentesque lacus orci, egestas id placerat at, sodales molestie odio. Donec mattis tortor eget purus pulvinar, non ornare urna egestas. Ut ullamcorper tortor ac dolor elementum mattis. Integer posuere libero elit, a sagittis elit tempus fringilla. Praesent id porta ipsum, malesuada aliquet urna.</p>
                    <p>Cras facilisis quis eros et tincidunt. Vivamus nulla magna, commodo a aliquam ut, finibus sed nulla. Morbi lacinia risus scelerisque leo fermentum consectetur. Maecenas convallis diam viverra dui pellentesque lobortis. Morbi consequat feugiat sem, in dignissim ante pharetra sed. Sed nisi est, ornare ac vehicula sed, varius ut dolor. Sed ultricies tincidunt porta.</p>
                    <p>Donec ornare risus non dui rhoncus fermentum. Fusce blandit nisl sit amet turpis ultricies sagittis. Praesent imperdiet convallis eros, sit amet auctor eros finibus at. Praesent malesuada, ligula quis vulputate iaculis, ligula tellus convallis risus, et tincidunt nisl augue eget justo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi nec magna mattis, congue dolor sollicitudin, ultricies arcu. Etiam egestas eget dui vel sodales. Nam semper tortor eros, vitae placerat nibh ornare sit amet.</p>
                    <h2>Lorem Ipsum</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse neque augue, consequat quis dolor ac, porttitor gravida augue. Praesent venenatis turpis sit amet nunc sodales consectetur. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed efficitur a erat sed ornare. Praesent vehicula metus quis efficitur lobortis. Nulla mattis diam non luctus tincidunt. In tempus vel lacus a interdum. Phasellus semper porta urna, id dapibus urna dignissim ut. Etiam cursus viverra felis, eu finibus ipsum fringilla in. Pellentesque lacus orci, egestas id placerat at, sodales molestie odio. Donec mattis tortor eget purus pulvinar, non ornare urna egestas. Ut ullamcorper tortor ac dolor elementum mattis. Integer posuere libero elit, a sagittis elit tempus fringilla. Praesent id porta ipsum, malesuada aliquet urna.</p>
                    <p>Cras facilisis quis eros et tincidunt. Vivamus nulla magna, commodo a aliquam ut, finibus sed nulla. Morbi lacinia risus scelerisque leo fermentum consectetur. Maecenas convallis diam viverra dui pellentesque lobortis. Morbi consequat feugiat sem, in dignissim ante pharetra sed. Sed nisi est, ornare ac vehicula sed, varius ut dolor. Sed ultricies tincidunt porta.</p>
                    <p>Donec ornare risus non dui rhoncus fermentum. Fusce blandit nisl sit amet turpis ultricies sagittis. Praesent imperdiet convallis eros, sit amet auctor eros finibus at. Praesent malesuada, ligula quis vulputate iaculis, ligula tellus convallis risus, et tincidunt nisl augue eget justo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi nec magna mattis, congue dolor sollicitudin, ultricies arcu. Etiam egestas eget dui vel sodales. Nam semper tortor eros, vitae placerat nibh ornare sit amet.</p>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="modal" data-modal="insurance-kickback" data-component="Content/RichTextModal">
    <div class="modal__inner">
        <div class="modal__content">
            <div class="modal-box">
                <div class="modal-box__top">
                    <div class="modal-box__heading">
                        <?php echo svg('info', 16, 16, '', ''); ?> You haven't added travel insurance
                    </div>
                    <button class="modal-box__button-close js-modal-close" type="button">
                        <?php echo svg('cancel', 18, 18, 'icon modal-box__icon-close icon icon--cancel', ''); ?>
                    </button>
                </div>
                <div class="modal-box__content">

                    <div class="modal-box__message modal-box__message--secondary">
                        <h3 class="modal-box__message-title">Don't forget essential cover for your holiday!</h3>
                        <p>Important: Take out travel insurance for <strong>£3,500 cancellation cover</strong> from the moment
                        you book your holiday.</p>
                    </div>
                    <div class="modal-box__message modal-box__message--primary">
                        <h4 class="modal-box__message-subtitle">Cancellation cover includes protection for:</h4>
                        <ul class="modal-box__message-list">
                            <li class="modal-box__message-list-item">Illness or injury to you and your immediate family</li>
                            <li class="modal-box__message-list-item">Redundancy</li>
                            <li class="modal-box__message-list-item">Stolen passport</li>
                        </ul>
                    </div>

                    <div class="modal-box__button-group">
                        <button class="bttn bttn--primary bttn--full-width js-modal-close">Get covered</button>
                        <button class="bttn bttn--primary bttn--full-width js-modal-close">I'm already covered</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal modal--xwide" data-modal="hub" data-component="Content/RichTextModal">
    <div class="modal__inner">
        <div class="modal__content">
            <div class="modal-box">
                <div class="modal-box__top">
                    <div class="modal-box__heading">Welcome to the Jet2 Hub!</div>
                    <button class="modal-box__button-close js-modal-close" type="button">
                        <?php echo svg('cancel', 18, 18, 'icon modal-box__icon-close icon icon--cancel', ''); ?>
                    </button>
                </div>
                <div class="modal-box__content">
                    <?php
                    include( __DIR__ . '/../Components/Content/HubModal/HubModal.php' ); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal modal--wide" data-modal="flight-information" data-component="Content/RichTextModal">
    <div class="modal__inner">
        <div class="modal__content">
            <div class="modal-box">
                <div class="modal-box__top">
                    <div class="modal-box__heading">Flight information</div>
                    <button class="modal-box__button-close js-modal-close" type="button">
                        <?php echo svg('cancel', 18, 18, 'icon modal-box__icon-close icon icon--cancel', ''); ?>
                    </button>
                </div>
                <div class="modal-box__content">
                    <?php include( __DIR__ . '/../Components/Booking/FlightSummaryModal/FlightSummaryModal.php'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" data-modal="share-via-email" data-component="Content/RichTextModal">
    <div class="modal__inner">
        <div class="modal__content">
            <div class="modal-box" data-component="Property/ShareLinkByEmail">

                <div class="modal-box__top">
                    <div class="modal-box__heading">Share by email</div>
                    <button class="modal-box__button-close js-modal-close" type="button">
                        <?php echo svg('cancel', 18, 18, 'icon modal-box__icon-close icon icon--cancel', ''); ?>
                    </button>
                </div>

                <div class="modal-box__content">
                    <form class="share-form">
                        <div>
                            <label class="share-form__label">
                                Your name
                            </label>
                            <input name="from" data-msg-required="This information is required" class="share-form__input js-share-link-by-email-from" type="text" placeholder="Enter your name">
                        </div>

                        <label class="share-form__label">
                            Send to
                        </label>

                        <div class="js-email-to-container">
                            <div>
                                <input name="email0" class="share-form__input js-share-link-by-email-to" data-msg-email="Enter a valid email address" type="email" placeholder="Email address" style="">
                            </div>
                            <div>
                                <input name="email1" class="share-form__input js-share-link-by-email-to" data-msg-email="Enter a valid email address" type="email" placeholder="Email address" style="">
                            </div>
                            <div>
                                <input name="email2" class="share-form__input js-share-link-by-email-to" data-msg-email="Enter a valid email address" type="email" placeholder="Email address" style="display: none;">
                            </div>
                            <div>
                                <input name="email3" class="share-form__input js-share-link-by-email-to" data-msg-email="Enter a valid email address" type="email" placeholder="Email address" style="display: none;">
                            </div>
                            <div>
                                <input name="email4" class="share-form__input js-share-link-by-email-to" data-msg-email="Enter a valid email address" type="email" placeholder="Email address" style="display: none;">
                            </div>
                        </div>

                        <a class="share-form__add js-add-another-email-button">
                            Add another email
                        </a>
                        <p class="share-form__no-more-message js-email-limit-msg" style="display: none;">
                            You can only share with 5 email addresses
                        </p>
                        <button class="share-form__button button button--base button--3d button--fullwidth js-share-link-by-email-button">
                            Share now
                        </button>
                        <p class="share-form__sent js-email-success-msg" style="display: none">Email(s) sent</p>
                        <p class="share-form__sent js-email-failure-msg" style="display: none">Failed to send email(s)</p>
                    </form>

                    <h3 class="share-clipboard__title">Copy link to clipboard</h3>

                    <div class="share-clipboard">
                        <span class="js-property-details-url">https://www.jet2holidays.com/villas/search/details?property=75277&amp;date=24-04-2018&amp;duration=7&amp;occupancy=r2c&amp;airport=1&amp;board=4&amp;oflight=518233&amp;iflight=518236&amp;rooms=52904&amp;utm_medium=referral&amp;utm_source=saveandshare&amp;utm_campaign=shareholiday%7cvillas&amp;utm_content=link&amp;utm_userId=8f41cc3b-0122-4e59-9eb7-ce686d32fe88</span>
                        <a class="share-clipboard__copy js-copy-to-clipboard" data-clipboard-action="copy" data-clipboard-target=".js-property-details-url">
                            Copy
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal modal--wide" data-modal="hotel-video" data-component="Content/RichTextModal">
  <div class="modal__inner">
    <div class="modal__content">
      <div class="modal-box" data-component="Content/TabbedLinks">

        <div class="modal-box__top">
          <div class="modal-box__heading">Video</div>
          <button class="modal-box__button-close js-modal-close" type="button">
            <?php echo svg('cancel', 18, 18, 'icon modal-box__icon-close icon icon--cancel', ''); ?>
          </button>
        </div>

        <div class="modal-box__content padding--none">
          <iframe width="100%" height="304" src="https://www.youtube.com/embed/I2XOJHg-Yw0" frameborder="0" allowfullscreen=""></iframe>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal" data-modal="holiday-changes-notification" data-component="Content/RichTextModal">
    <div class="modal__inner">
        <div class="modal__content">
            <div class="modal-box">
                <div class="modal-box__top">
                    <div class="modal-box__heading">We've updated your holiday</div>
                    <button class="modal-box__button-close js-modal-close" type="button">
                        <?php echo svg('cancel', 18, 18, 'icon modal-box__icon-close icon icon--cancel', ''); ?>
                    </button>
                </div>
                <div class="modal-box__content">

                    <div class="change-confirmation">
                        <h3 class="title-m">You've made changes to your xxxxxxxxxx.</h3>
                        <p>To find you the best price, we may have changed other parts of your holiday. Please
                        check all of the details below:</p>

                        <div class="modal-box__tiled-list">

                            <div class="modal-box__tiled-list-item">
                                <div class="modal-box__tiled-list-col modal-box__tiled-list-col--with-icon">
                                    <div class="modal-box__tiled-list-label label--large-square">
                                        <?php svg('user', 20, 20, 'modal-box__tiled-list-icon', ''); ?>
                                    </div>
                                </div>
                                <div class="modal-box__tiled-list-col">3 Adults, 1 Child, 1 Infant</div>
                            </div>

                            <div class="modal-box__tiled-list-item">
                                <div class="modal-box__tiled-list-col modal-box__tiled-list-col--with-icon">
                                    <div class="modal-box__tiled-list-label label--large-square">
                                        <?php svg('nights', 20, 20, 'modal-box__tiled-list-icon', ''); ?>
                                    </div>
                                </div>
                                <div class="modal-box__tiled-list-col">14 nights from 8th Sep 2017</div>
                            </div>

                            <div class="modal-box__tiled-list-item">
                                <div class="modal-box__tiled-list-col modal-box__tiled-list-col--with-icon">
                                    <div class="label--large-square">
                                        <?php svg('clock', 20, 20, 'modal-box__tiled-list-icon', ''); ?>
                                    </div>
                                </div>
                                <div class="modal-box__tiled-list-col">
                                    <div class="modal-box__tiled-list-label change-confirmation__flight-times">
                                        Leeds Bradford <?php svg('plane2', 20, 20, 'change-confirmation__flight-times-icon', ''); ?> Palma de Mallorca
                                    </div>
                                    <div><strong>Departs:</strong>  Fri 08 Sep 2017 at 22:10</div>
                                    <div><strong>Arrives:</strong> Sat 09 Sep 2017 at 00:45</div>
                                </div>
                            </div>

                            <div class="modal-box__tiled-list-item">
                                <div class="modal-box__tiled-list-col modal-box__tiled-list-col--with-icon">
                                    <div class="modal-box__tiled-list-label label--large-square">
                                        <?php svg('clock', 20, 20, 'modal-box__tiled-list-icon', ''); ?>
                                    </div>
                                </div>
                                <div class="modal-box__tiled-list-col">
                                    <div class="change-confirmation__flight-times">
                                        Palma de Mallora <?php svg('plane2', 20, 20, 'change-confirmation__flight-times-icon', ''); ?> Leeds Bradford
                                    </div>
                                    <div><strong>Departs:</strong>  Fri 22 Sep 2017 at 15:03</div>
                                    <div><strong>Arrives:</strong> Sat 23 Sep 2017 at 17:45</div>
                                </div>
                            </div>

                            <div class="modal-box__tiled-list-item">
                                <div class="modal-box__tiled-list-col modal-box__tiled-list-col--with-icon">
                                    <div class="modal-box__tiled-list-label label--large-square">
                                        <?php svg('meals', 20, 20, 'modal-box__tiled-list-icon', ''); ?>
                                    </div>
                                </div>
                                <div class="modal-box__tiled-list-col">Half board</div>
                            </div>

                            <div class="modal-box__tiled-list-item">
                                <div class="modal-box__tiled-list-col modal-box__tiled-list-col--with-icon">
                                    <div class="modal-box__tiled-list-label label--large-square">
                                        <?php svg('cog', 20, 20, 'modal-box__tiled-list-icon', ''); ?>
                                    </div>
                                </div>
                                <div class="modal-box__tiled-list-col">(1) Standard Double Room</div>
                            </div>

                            <div class="modal-box__tiled-list-item">
                                <div class="modal-box__tiled-list-col modal-box__tiled-list-col--with-icon">
                                    <div class="modal-box__tiled-list-label label--large-square label--fcp">
                                        <?php svg('smile', 20, 20, 'modal-box__tiled-list-icon', ''); ?>
                                    </div>
                                </div>
                                <div class="modal-box__tiled-list-col">(1) Free Child Place</div>
                            </div>


                            <div class="change-confirmation__total">
                                New holiday price <strong class="change-confirmation__total-price title-l">£1,390.00</strong>
                            </div>

                        </div>

                    </div>

                </div>
                <div class="modal-box__close">
                    <a class="bttn bttn--primary js-modal-close">Done</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal" data-modal="holiday-changes-error" data-component="Content/RichTextModal">
    <div class="modal__inner">
        <div class="modal__content">
            <div class="modal-box">
                <div class="modal-box__top">
                    <div class="modal-box__heading">No availability was found</div>
                    <button class="modal-box__button-close js-modal-close" type="button">
                        <?php echo svg('cancel', 18, 18, 'icon modal-box__icon-close icon icon--cancel', ''); ?>
                    </button>
                </div>
                <div class="modal-box__content">
                    <p>No availability was found.</p>
                </div>
                <div class="modal-box__close">
                    <a class="bttn bttn--primary js-modal-close">Done</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" data-modal="board-basis-select" data-component="Search/BoardBasis">
    <div class="modal__inner">
        <div class="modal__content">
            <div class="modal-box">
                <div class="modal-box__top">
                    <div class="modal-box__heading">Change board</div>
                    <button class="modal-box__button-close js-modal-close" type="button">
                        <?php echo svg('cancel', 18, 18, 'icon modal-box__icon-close icon icon--cancel', ''); ?>
                    </button>
                </div>
                <div class="modal-box__content">

                    <div class="option-item option-item--board-basis option-item--selected" data-component="_Partials/OptionItem">
                        <div class="option-item__main">
                            <div class="option-item__info">
                                <div class="option-item__title">
                                    <strong>All Inclusive</strong>
                                </div>
                            </div>
                            <div class="option-item__cta">
                                <span class="option-item__price">-£10</span>
                                <span class="option-item__cta-icon-wrap"><?php echo svg('tick', 20, 20, 'option-item__cta-icon', ''); ?></span>
                            </div>
                        </div>
                    </div>

                    <div class="option-item option-item--board-basis" data-component="_Partials/OptionItem">
                        <div class="option-item__main">
                            <div class="option-item__info">
                                <div class="option-item__title">
                                    <strong>Full board</strong>
                                </div>
                            </div>
                            <div class="option-item__cta">
                                <span class="option-item__price">-£17</span>
                                <span class="option-item__cta-icon-wrap"><?php echo svg('tick', 20, 20, 'option-item__cta-icon', ''); ?></span>
                            </div>
                        </div>
                    </div>

                    <div class="option-item option-item--board-basis" data-component="_Partials/OptionItem">
                        <div class="option-item__main">
                            <div class="option-item__info">
                                <div class="option-item__title">
                                    <strong>Half board</strong>
                                </div>
                            </div>
                            <div class="option-item__cta">
                                <span class="option-item__price">-£25</span>
                                <span class="option-item__cta-icon-wrap"><?php echo svg('tick', 20, 20, 'option-item__cta-icon', ''); ?></span>
                            </div>
                        </div>
                    </div>

                    <div class="option-item option-item--board-basis" data-component="_Partials/OptionItem">
                        <div class="option-item__main">
                            <div class="option-item__info">
                                <div class="option-item__title">
                                    <strong>Self catering</strong>
                                </div>
                            </div>
                            <div class="option-item__cta">
                                <span class="option-item__price">-£72</span>
                                <span class="option-item__cta-icon-wrap"><?php echo svg('tick', 20, 20, 'option-item__cta-icon', ''); ?></span>
                            </div>
                        </div>
                    </div>

                    <div class="option-item option-item--board-basis is-disabled" data-component="_Partials/OptionItem">
                        <div class="option-item__main">
                            <div class="option-item__info">
                                <div class="option-item__title">
                                    <strong>Bed and breakfast</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="option-item option-item--board-basis" data-component="_Partials/OptionItem">
                        <div class="option-item__main">
                            <div class="option-item__info">
                                <div class="option-item__title">
                                    <strong>Room only</strong>
                                </div>
                            </div>
                            <div class="option-item__cta">
                                <span class="option-item__price">-£100</span>
                                <span class="option-item__cta-icon-wrap"><?php echo svg('tick', 20, 20, 'option-item__cta-icon', ''); ?></span>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="modal-box__close">
                    <a class="button button--base button--3d js-modal-close">Done</a>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="modal" data-modal="trade-price-link" data-component="Content/RichTextModal">
    <div class="modal__inner">
        <div class="modal__content">
            <div class="modal-box">
                <div class="modal-box__top">
                    <div class="modal-box__heading">Holiday price including</div>
                    <button class="modal-box__button-close js-modal-close" type="button">
                        <?php echo svg('cancel', 18, 18, 'icon modal-box__icon-close icon icon--cancel', ''); ?>
                    </button>
                </div>
                <div class="modal-box__content">
                    <ul class="inclusive-list">
                        <li class="inclusive-list__item">
                            <div class="inclusive-list__text">Seats &amp; meals:</div>
                            <div class="inclusive-list__data--bold">£763.50 ppp</div>
                        </li>
                        <li class="inclusive-list__item">
                            <div class="inclusive-list__text">Seats:</div>
                            <div class="inclusive-list__data--bold">£775.50 ppp</div>
                        </li>
                        <li class="inclusive-list__item">
                            <div class="inclusive-list__text">Meals</div>
                            <div class="inclusive-list__data--bold">£776.50 ppp</div>
                        </li>
                    </ul>

                    <ul class="inclusive-list">
                        <li class="inclusive-list__item">
                            <div class="inclusive-list__text">Quote based on (Subject to change and availability):</div>
                        </li>
                    </ul>

                    <ul class="inclusive-list">
                        <li class="inclusive-list__item">
                            <div class="inclusive-list__text--bold">Standard seats</div>
                        </li>
                        <li class="inclusive-list__item">
                            <div class="inclusive-list__text">Outbound:</div>
                            <div class="inclusive-list__data--bold">31B, 31A</div>
                        </li>
                        <li class="inclusive-list__item">
                            <div class="inclusive-list__text">Inbound:</div>
                            <div class="inclusive-list__data--bold">33F, 33E</div>
                        </li>
                    </ul>

                    <ul class="inclusive-list">
                        <li class="inclusive-list__item">
                            <div class="inclusive-list__text--bold">Meals</div>
                        </li>
                        <li class="inclusive-list__item">
                            <div class="inclusive-list__text">Outbound:</div>
                            <div class="inclusive-list__data--bold">All Day Breakfast</div>
                        </li>
                        <li class="inclusive-list__item">
                            <div class="inclusive-list__text">Inbound:</div>
                            <div class="inclusive-list__data--bold">All Day Breakfast</div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal modal--wide modal--full-height modal--filters js-filter-modal" data-modal="search-filters" data-component="Content/RichTextModal" id="search-filter-modal">
    <div class="modal__inner">
        <div class="modal__content">
            <div class="modal-box">
                <div class="modal-box__top">
                    <div class="modal-box__heading title-m">
                        Filter 191 results
                    </div>
                    <button class="modal-box__button-close js-modal-close" type="button">
                        <svg class="modal-box__icon-close icon icon--cancel" xmlns="http://www.w3.org/2000/svg" width="18" height="18">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cancel"></use>
                        </svg>
                    </button>
                </div>
                <div class="modal-box__content">
                    <?php include(COMPONENTS_DIR . 'Search/SearchResultsOptionsV2/SearchFilters/SearchFilters.php'); ?>
                </div>
                <div class="filter-modal-v2-button--overlay">
                    <button class="filter-modal-v2-button bttn bttn--secondary js-modal-apply">Done</button>
                </div>
                <div class="filter-modal-v2__loader">
                    <?php include (COMPONENTS_DIR . '_Partials/Preloader/preloader.php'); ?>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal modal--wide" data-modal="free-child-places" data-component="Content/RichTextModal">

    <div class="modal__inner">
        <div class="modal__content">
            <div class="modal-box">
                <div class="modal-box__top">
                    <div class="modal-box__heading">Free Child Places Ages</div>
                    <button class="modal-box__button-close js-modal-close" type="button">
                        <?php echo svg('cancel', 18, 18, 'icon modal-box__icon-close icon icon--cancel', ''); ?>
                    </button>
                </div>
                <div class="modal-box__content">

                  <ul class="overview__child-section--tick-list-margin overview__section--list-view overview__child-section--no-margin-top">
                      <li class="overview__child-section--heading">Free child place age up to 16 years for All Inclusive Plus.</li>
                  </ul>

                <p class="overview__child-section--heading overview__child-section--heading-bold">Terms and conditions</p>
                  <ul class="overview__child-section__bullet-list">
                    <li>Free Child places are subject to availability and are only applicable on selected hotels / departure dates / departure points / room types and board basis. Free Child Places may be added or withdrawn at any time prior to booking and the latest availability will be shown prior to booking.</li>
                    <li>Free Child places are available for holidays departing on or after the 1st April 2013.</li>
                    <li>One Free Child place is available when there are at least 2 full paying adults. There can only be one Free Child place per room on the booking. Multiple Free Child places can be booked as long as there are at least 2 full paying adults per child place and each Free Child place is assigned into a different room and there is availability of free child places.</li>
                    <li>The child age where a Free Child would be applicable is displayed on the hotel description page of the brochure and on our website. The child age on the date of return must not exceed the specified age to be applicable to a Free Child.</li>
                    <li>Free Child places are still required to pay flight taxes and charges. The basic flight fare, one piece of check-in baggage, accommodation and shuttle transfers form the ‘FREE’ element of the price. Air passenger Duty (APD), airport taxes and charges are still applicable and will be included in the price shown at time of booking. All other ancillary charges on the flight or during the holiday, such as legroom and in-flight meals, room upgrades, and optional meal arrangements, shall be chargeable.</li>
                    <li>Free Child Places cannot be combined with any other promotions or offers, unless otherwise stated.</li>
                    <li>Free Child Places are applicable to new bookings only.</li>
                  </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal modal--wide" data-modal="infants-go-free" data-component="Content/RichTextModal">
    <div class="modal__inner">
        <div class="modal__content">
            <div class="modal-box">
                <div class="modal-box__top">
                    <div class="modal-box__heading">INFANTS GO FREE on all holidays and city breaks with Jet2holidays</div>
                    <button class="modal-box__button-close js-modal-close" type="button">
                        <?php echo svg('cancel', 18, 18, 'icon modal-box__icon-close icon icon--cancel', ''); ?>
                    </button>
                </div>
                <div class="modal-box__content">

                  <p class="overview__child-section--heading"> An infant is classed as under 24 months and must be under 24 months on the return date of travel</h3>

                  <ul class="overview__child-section--tick-list-margin overview__section--list-view">
                     <li>Free child place age up to 16 years for All Inclusive Plus.</li>
                     <li>Discount will automatically be applied at the time of booking</li>
                     <li>Offer valid on holidays booked from Friday 2nd March 2012 at 2pm</li>
                     <li>Jet2holidays reserve the right to amend or remove this promotion at any time prior to a customer booking</li>
                     <li>Applicable to new bookings only</li>
                     <li>Offer available when booked online at www.Jet2holidays.com or via the Call Centre on free phone 0800 408 5599.</li>
                     <li>Customers must be aged 18 or over to place a booking</li>
                     <li>If dates are changed by customer after the promotional period, or to flight/holiday dates outside of the promotional period the discount will no longer apply</li>
                     <li>All other terms and conditions as per the Jet2holidays website apply.</li>
                  </ul>


                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal modal--small" data-modal="group-form" data-component="Content/RichTextModal">
    <div class="modal__inner">
        <div class="modal__content">
            <div class="modal-box">
                <div class="modal-box__top">
                    <div class="modal-box__heading">Easy Group Booking</div>
                    <button class="modal-box__button-close js-modal-close" type="button">
                        <?php echo svg('cancel', 18, 18, 'icon modal-box__icon-close icon icon--cancel', ''); ?>
                    </button>
                </div>
                <div class="modal-box__content">
                    <h3 class="padding--bottom-half">Contact details</h3>
                    <div>
                        <label class="share-form__label">Full name</label>
                        <input name="name" data-msg-required="This information is required" class="share-form__input" type="text" placeholder="Enter your full name">
                    </div>
                    <div>
                        <label class="share-form__label">Contact number</label>
                        <input name="number" data-msg-required="This information is required" class="share-form__input" type="tel" placeholder="Enter your contact number">
                    </div>
                    <div>
                        <label class="share-form__label">Email address</label>
                        <input name="email" data-msg-required="This information is required" class="share-form__input" type="text" placeholder="Enter your Email address">
                    </div>
                    <h3 class="padding--top-half padding--bottom-half" >Who's going?</h3>
                    <div class="padding--bottom-half">
                        <label class="share-form__label">Group Size</label>
                        <div class="form-element-wrapper form-element-wrapper--select clearfix">
                            <label>Select</label>
                            <select name="group-type" id="group-type">
                                <option value="" selected disabled>Choose from list</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20+">20+</option>
                            </select>
                        </div>
                    </div>

                    <div class="padding--bottom-half">
                        <label class="share-form__label">Group type</label>
                        <div class="form-element-wrapper form-element-wrapper--select clearfix">
                            <label>Select</label>
                            <select name="group-type" id="group-type">
                                <option value="" selected disabled>Choose from list</option>
                                <option value="holiday-with-family">Holiday with family</option>
                                <option value="holiday-with-friends">Holiday with friends</option>
                                <option value="stag-do">Stag Do</option>
                                <option value="hen-party">Hen party</option>
                                <option value="clubbing">Clubbing</option>
                                <option value="cycling-group">Cycling Group</option>
                                <option value="dance-group">Dance Group</option>
                                <option value="bowls-group">Bowls group</option>
                                <option value="conference">Conference</option>
                                <option value="celebration">Celebration: Birthday/Anniversary</option>
                                <option value="wedding">Wedding</option>
                                <option value="School">School/College Trip</option>
                                <option value="golf">Golf</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>

                    <h3 class="padding--top-half padding--bottom-half">Where to?</h3>
                    <div>
                        <label class="share-form__label">Depature airport</label>
                        <input name="from" data-msg-required="This information is required" class="share-form__input" type="text" placeholder="Enter Depature airport">
                    </div>
                    <div>
                        <label class="share-form__label">Destination</label>
                        <input name="destination" data-msg-required="This information is required" class="share-form__input" type="text" placeholder="Enter Destination airport">
                    </div>
                    <div>
                        <label class="share-form__label">Resort / Hotel</label>
                        <input name="resort" data-msg-required="This information is required" class="share-form__input" type="text" placeholder="Enter Resort / Hotel">
                    </div>

                    <h3 class="padding--top-half padding--bottom-half">When?</h3>
                    <div>
                        <label class="share-form__label">Depature airport</label>
                       <input name="departure" data-msg-required="This information is required" class="share-form__input" type="text" placeholder="Enter Depature airport">
                    </div>
                    <div>
                        <label class="share-form__label">Duration</label>
                        <input name="duration" data-msg-required="This information is required" class="share-form__input" type="text" placeholder="Enter Duration of stay">
                    </div>

                </div>
                <div class="modal-box__close">
                    <a class="button button--base button--3d js-modal-close">Submit</a>
                </div>
            </div>
        </div>
    </div>
</div>
