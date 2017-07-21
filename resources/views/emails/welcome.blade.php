
@extends('beautymail::templates.ark')

        
@section('content') 

    @include('beautymail::templates.ark.heading', [
		'heading' => 'Mail from justlaravel',
		'level' => 'h1'
	])

    @include('beautymail::templates.ark.contentStart')

        <h4 class="secondary"><strong>A test mail sent a part of explaining the demo of sending beautiful html mails using BeautyMail</strong></h4>
        <p>You can find the detailed post <a href="#">here</a></p>

    @include('beautymail::templates.ark.contentEnd')

    @include('beautymail::templates.ark.heading', [
		'heading' => 'Some of my posts',
		'level' => 'h2'
	])

    @include('beautymail::templates.ark.contentStart')

        <h4 class="secondary"><strong>Feel free to check any of these posts.</strong></h4>
        <table>
          <tr>
            <td><a href="http://justlaravel.com/posts-search-gallery-view-app-vuejs/" target="_blank">
              <img src="https://i1.wp.com/justlaravel.com/wp-content/uploads/2017/05/Vue_Posts_WP_1038_576.png" width="200" height="200" >
              Posts search and gallery view app in Vuejs</a>
            </td>
            <td><a href="http://justlaravel.com/introduction-vue-js-in-laravel/" target="_blank">
              <img src="https://i0.wp.com/justlaravel.com/wp-content/uploads/2017/02/introduction_vuejs_laravel_FEAT_WP_1038_576.png" width="200" height="200" >
              Introduction to vue.js in Laravel</a>
            </td>
            <td><a href="http://justlaravel.com/laravel-social-login-using-socialite/" target="_blank">
              <img src="https://i1.wp.com/justlaravel.com/wp-content/uploads/2016/12/SocialLogin_justLaravel.png" width="200" height="200" >
              Laravel Social Login using Socialite</a>
            </td>
            
          </tr>
          <tr>
            <td><a href="http://justlaravel.com/implement-datatables-server-side-laravel/" target="_blank">
              <img src="https://i0.wp.com/justlaravel.com/wp-content/uploads/2016/09/datatables_serverside_FEAT_WP_1038_576.png" width="200" height="200" >
              How to implement DataTables server-side in laravel</a>
            </td>
            <td><a href="http://justlaravel.com/ajax-crud-operations-laravel/" target="_blank">
              <img src="https://i0.wp.com/justlaravel.com/wp-content/uploads/2016/08/ajax_CRUD_FEAT_WP_1038_576.png" width="200" height="200" >
              Ajax CRUD operations in laravel</a>
            </td>
            <td><a href="http://justlaravel.com/visualization-data-highcharts-laravel/" target="_blank">
              <img src="https://i0.wp.com/justlaravel.com/wp-content/uploads/2016/05/visualizaton_highcharts_feat_wp_1038_576.png" width="200" height="200" >
              Visualization of data using highcharts in laravel</a>
            </td>
            
          </tr>
          <tr>
            
            <td><a href="http://justlaravel.com/custom-authentication-validation-laravel/" target="_blank">
              <img src="https://i1.wp.com/justlaravel.com/wp-content/uploads/2016/04/custom_authentication_feat_wp_1038_576.png" width="200" height="200" >
              Custom Authentication with validation in laravel</a>
            </td>
            <td><a href="http://justlaravel.com/cryptography-encryption-hashing/" target="_blank">
              <img src="https://i2.wp.com/justlaravel.com/wp-content/uploads/2016/07/using_cryptography_in_Laravel.png" width="200" height="200" >
              How to use encryption, decryption, hashing (cryptography) in laravel</a>
            </td>
            <td><a href="http://justlaravel.com/search-functionality-laravel/" target="_blank">
              <img src="https://i1.wp.com/justlaravel.com/wp-content/uploads/2016/04/search_functionality_feat_WP_1038_576.png" width="200" height="200" >
              Search functionality in Laravel</a>
            </td>
          </tr>
          <tr>
            <td><a href="http://justlaravel.com/integrate-stripe-payment-gateway-laravel/" target="_blank">
              <img src="https://i0.wp.com/justlaravel.com/wp-content/uploads/2016/10/StripePaymentGateway.png" width="200" height="200" >
              How to integrate Stripe payment gateway in laravel</a>
            </td>
            <td><a href="http://justlaravel.com/paginated-data-search-laravel/" target="_blank">
              <img src="https://i2.wp.com/justlaravel.com/wp-content/uploads/2016/05/pagination_search_Feat_WP_1038_576.png" width="200" height="200" >
              Paginated data with Search functionality</a>
            </td>
            <td><a href="http://justlaravel.com/using-bootgrid-plugin-laravel/" target="_blank">
              <img src="https://i0.wp.com/justlaravel.com/wp-content/uploads/2016/07/bootgrid_implementation_FEAT_WP_1038_576.png" width="200" height="200" >
              Bootgrid implementation in laravel</a>
            </td>
          </tr>
        </table>

    @include('beautymail::templates.ark.contentEnd')

@stop