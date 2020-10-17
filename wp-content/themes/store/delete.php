<div class="col-lg-3 col-md-3">
  <!-- woocommerce.php -->
  <div class="shop__sidebar">
    <div class="berocket_single_filter_widget berocket_single_filter_widget_88 " data-id="88" style="">
      <div class="bapf_sfilter bapf_ckbox" data-op="OR" data-taxonomy="product_cat" data-name="category" id="bapf_1">
        <div class="bapf_head">
          <h3>category</h3>
        </div>
        <div class="bapf_body">
          <ul>
            <li><input data-name="Uncategorized" id="bapf_1_16" type="checkbox" value="16"><label
                for="bapf_1_16">Uncategorized</label></li>
            <li><input data-name="women" id="bapf_1_17" type="checkbox" value="17"><label for="bapf_1_17">women</label>
              <ul>
                <li><input data-name="dress" id="bapf_1_38" type="checkbox" value="38"><label
                    for="bapf_1_38">dress</label></li>
              </ul>
            </li>
            <li><input data-name="Clothing" id="bapf_1_51" type="checkbox" value="51"><label
                for="bapf_1_51">Clothing</label>
              <ul>
                <li><input data-name="Tshirts" id="bapf_1_52" type="checkbox" value="52"><label
                    for="bapf_1_52">Tshirts</label></li>
                <li><input data-name="Hoodies" id="bapf_1_53" type="checkbox" value="53"><label
                    for="bapf_1_53">Hoodies</label></li>
                <li><input data-name="Accessories" id="bapf_1_54" type="checkbox" value="54"><label
                    for="bapf_1_54">Accessories</label></li>
              </ul>
            </li>
            <li><input data-name="Music" id="bapf_1_55" type="checkbox" value="55"><label for="bapf_1_55">Music</label>
            </li>
            <li><input data-name="Decor" id="bapf_1_56" type="checkbox" value="56"><label for="bapf_1_56">Decor</label>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="berocket_single_filter_widget berocket_single_filter_widget_87 " data-id="87" style="">
      <div class="bapf_sfilter bapf_slidr bapf_slidr_jqrui bapf_slidr_ready" data-op="slidr" data-taxonomy="price"
        data-name="price" id="bapf_2">
        <div class="bapf_head">
          <h3>price</h3>
        </div>
        <div class="bapf_body">
          <div class="bapf_slidr_all">
            <div
              class="bapf_slidr_main bapf_slidr_num ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
              data-display="wc_price" data-min="2" data-start="2" data-max="90" data-end="90" data-step="1">
              <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div><span
                class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span><span
                class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 100%;"></span>
            </div><span class="bapf_from"><span class="bapf_tbprice">$</span><span
                class="bapf_val">2.00</span></span><span class="bapf_to"><span class="bapf_tbprice">$</span><span
                class="bapf_val">90.00</span></span>
          </div>
        </div>
      </div>
    </div>
    <div class="berocket_single_filter_widget berocket_single_filter_widget_85 " data-id="85" style="">
      <div class="bapf_sfilter bapf_ckbox" data-op="OR" data-taxonomy="pa_color" data-name="color" id="bapf_3">
        <div class="bapf_head">
          <h3>color</h3>
        </div>
        <div class="bapf_body">
          <ul>
            <li><input data-name="blue" id="bapf_3_29" type="checkbox" value="29"><label for="bapf_3_29">blue</label>
            </li>
            <li><input data-name="Gray" id="bapf_3_60" type="checkbox" value="60"><label for="bapf_3_60">Gray</label>
            </li>
            <li><input data-name="green" id="bapf_3_28" type="checkbox" value="28"><label for="bapf_3_28">green</label>
            </li>
            <li><input data-name="orange" id="bapf_3_27" type="checkbox" value="27"><label
                for="bapf_3_27">orange</label></li>
            <li><input data-name="red" id="bapf_3_26" type="checkbox" value="26"><label for="bapf_3_26">red</label></li>
            <li><input data-name="Yellow" id="bapf_3_61" type="checkbox" value="61"><label
                for="bapf_3_61">Yellow</label></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="berocket_single_filter_widget berocket_single_filter_widget_84 " data-id="84" style="">
      <div class="bapf_sfilter bapf_ckbox" data-op="OR" data-taxonomy="pa_size" data-name="size" id="bapf_4">
        <div class="bapf_head">
          <h3>size</h3>
        </div>
        <div class="bapf_body">
          <ul>
            <li><input data-name="Large" id="bapf_4_57" type="checkbox" value="57"><label for="bapf_4_57">Large</label>
            </li>
            <li><input data-name="Small" id="bapf_4_59" type="checkbox" value="59"><label for="bapf_4_59">Small</label>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
http://localhost/1/log-in

http://localhost/1/my-account/customer-logout/?_wpnonce=912ad590da



function redirect_login_page(){
    if(is_user_logged_in()){
        return wc_logout_url();
              return;
    }
    global $post;
    // Store for checking if this page equals wp-login.php

    // permalink to the custom login page
    $login_page  = get_permalink( 'CUSTOM_LOGIN_PAGE_ID' );

    if( has_shortcode($post->post_content, "woocommerce_my_account") ) {
        wp_redirect( $login_page );
        exit();
    }
}

add_action( 'template_redirect','redirect_login_page' );