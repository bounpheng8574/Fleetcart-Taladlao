<footer class="footer-wrap" style="background: #f7f7f7;">
    <div class="container">
        <div class="footer" style="margin-top: 50px;">
            <div class="footer-top">
                <div class="row">
                    <!-- logo here -->

                        <div class="col-lg-3 col-md-5">
                            <div class="footer-links">
                                <h4 class="title">ກ່ຽວກັບ</h4>
                                <ul class="list-inline">
                                <li><a href="#" target="">About Us</a></li>
                                <li><a href="#" target="">Careers</a></li>
                                <li><a href="#" target="">Taladlao stores</a></li>
                                <li><a href="#" target="">News</a></li>
                                <li><a href="#" target="">Taladlao warehouse</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-5">
                            <div class="footer-links">
                                <h4 class="title">HELP</h4>
                                <ul class="list-inline">
                                <li><a href="#" target="">Payments</a> </li>
                                <li><a href="#" target="">Shipping</a> </li>
                                <li><a href="#" target="">Cancellation & Returns</a> </li>
                                <li><a href="#" target="">FAQ</a> </li>
                                <li><a href="#" target="">Report Infringement</a> </li>
                                </ul>
                            </div>
                        </div>


                        <div class="col-lg-2 col-md-6">
                            <div class="footer-links">
                                <h4 class="title">POLICY</h4>
                                <ul class="list-inline">
                                <li><a href="#" target="">Return Policy</a> </li>
                                <li><a href="#" target="">Terms of User</a> </li>
                                <li><a href="#" target="">Security</a> </li>
                                <li><a href="#" target="">Privacy</a> </li>
                                <li><a href="#" target="">Sitemap</a> </li>
                                </ul>
                            </div>
                        </div>

                    <div class="col-lg-3 col-md-5">
                        <div class="footer-links">
                            <h4 class="title">{{ trans('storefront::layout.my_account') }}</h4>

                            <ul class="list-inline">
                                <li>
                                    <a href="{{ route('account.dashboard.index') }}">
                                        {{ trans('storefront::account.pages.dashboard') }}
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('account.orders.index') }}">
                                        {{ trans('storefront::account.pages.my_orders') }}
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('account.reviews.index') }}">
                                        {{ trans('storefront::account.pages.my_reviews') }}
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('account.profile.edit') }}">
                                        {{ trans('storefront::account.pages.my_profile') }}
                                    </a>
                                </li>

                                @auth
                                    <li>
                                        <a href="{{ route('logout') }}">
                                            {{ trans('storefront::account.pages.logout') }}
                                        </a>
                                    </li>
                                @endauth
                            </ul>
                        </div>
                    </div>    

                    <div class="col-lg-4 col-md-5">
                        <div class="contact-us">
                            <h4 class="title">{{ trans('storefront::layout.contact_us') }}</h4>

                            <ul class="list-inline contact-info">
                                @if (setting('store_phone') && ! setting('store_phone_hide'))
                                    <li>
                                        <i class="las la-phone"></i>
                                        <span>{{ setting('store_phone') }}</span>
                                    </li>
                                @endif

                                @if (setting('store_email') && ! setting('store_email_hide'))
                                    <li>
                                        <i class="las la-envelope"></i>
                                        <span>{{ setting('store_email') }}</span>
                                    </li>
                                @endif

                                @if (setting('storefront_address'))
                                    <li>
                                        <i class="las la-map"></i>
                                        <span>{{ setting('storefront_address') }}</span>
                                    </li>
                                @endif
                            </ul>

                            @if (social_links()->isNotEmpty())
                                <ul class="list-inline social-links">
                                    @foreach (social_links() as $icon => $socialLink)
                                        <li>
                                            <a href="{{ $socialLink }}">
                                                <i class="{{ $icon }}"></i>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>

                     <div class="col-lg-3 col-md-5">
                            <div class="footer-links">
                                <h4 class="title">Office</h4>
                                <ul class="list-inline">
                                <li><a href="#" target="">Return Policy</a> </li>
                                <li><a href="#" target="">Terms of User</a> </li>
                                <li><a href="#" target="">Security</a> </li>
                                <li><a href="#" target="">Privacy</a> </li>
                                <li><a href="#" target="">Sitemap</a> </li>
                                </ul>
                            </div>
                        </div>

                </div>
            </div>


                   <!--  @if ($footerMenuOne->isNotEmpty())
                        <div class="col-lg-3 col-md-5">
                            <div class="footer-links">
                                <h4 class="title">{{ setting('storefront_footer_menu_one_title') }}</h4>

                                <ul class="list-inline">
                                    @foreach ($footerMenuOne as $menuItem)
                                        <li>
                                            <a href="{{ $menuItem->url() }}" target="{{ $menuItem->target }}">
                                                {{ $menuItem->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif

                    @if ($footerMenuTwo->isNotEmpty())
                        <div class="col-lg-3 col-md-5">
                            <div class="footer-links">
                                <h4 class="title">{{ setting('storefront_footer_menu_two_title') }}</h4>

                                <ul class="list-inline">
                                    @foreach ($footerMenuTwo as $menuItem)
                                        <li>
                                            <a href="{{ $menuItem->url() }}" target="{{ $menuItem->target }}">
                                                {{ $menuItem->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif

                    @if ($footerTags->isNotEmpty())
                        <div class="col-lg-4 col-md-7">
                            <div class="footer-links footer-tags">
                                <h4 class="title">{{ trans('storefront::layout.tags') }}</h4>

                                <ul class="list-inline">
                                    @foreach ($footerTags as $footerTag)
                                        <li>
                                            <a href="{{ $footerTag->url() }}">
                                                {{ $footerTag->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
                </div>
            </div> -->

            <div class="footer-bottom">
                <div class="row align-items-center">
                    <div class="col-md-8 col-sm-10">
                        <div class="footer-text">
                             <a href="https://www.taladlao.com/en/seller/sell"><i class="las la-suitcase"></i>
                            <span>Sell On Taladlao</span>
                            </a> 
                            &emsp;
                            {!! $copyrightText !!}   
                        </div>    
                    </div>
                    
                    @if ($acceptedPaymentMethodsImage->exists)
                        <div class="col-md-10 col-sm-3">
                            <div class="footer-payment">
                                <img src="{{ $acceptedPaymentMethodsImage->path }}" alt="accepted payment methods">
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</footer>
