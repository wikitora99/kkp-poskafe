<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   *
   * @return void
   */
  public function register()
  {
    //
  }

  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot()
  {
    Paginator::useBootstrap();

    // ID format number
    Blade::directive('number_id', function($val) {
      return "<?php echo number_format($val, 0, ',' , '.'); ?>";
    });

    // IDR currency
    Blade::directive('currency_id', function($val) {
      return "<?php echo 'Rp '.number_format($val, 0, ',', '.'); ?>";
    });

    // IDR short version
    Blade::directive('short_idr', function($val) {
      if ($val < 1000) {
        $format = number_format($val, 0, ',', '.');
        $simbol = '';
      }else if ($val < 1000000) {
        $format = number_format($val/1000, 0);
        $simbol = 'rb';
      }else if ($val < 1000000000) {
        if (substr(strval(number_format($val/1000000, 2)), -1) == 0) {
          $format = number_format($val/1000000, 1, ',', '.');
        }else {
          $format = number_format($val/1000000, 2, ',', '.');
        }
        $simbol = 'jt';
      }else if ($val < 1000000000000) {
        if (substr(strval(number_format($val/1000000000, 2)), -1) == 0) {
          $format = number_format($val/1000000000, 1, ',', '.');
        }else {
          $format = number_format($val/1000000000, 2, ',', '.');
        }
        $simbol = 'M';
      }else {
        if (substr(strval(number_format($val/1000000000000, 2)), -1) == 0) {
          $format = number_format($val/1000000000000, 1, ',', '.');
        }else {
          $format = number_format($val/1000000000000, 2, ',', '.');
        }
        $simbol = 'T';
      }
      
      return $format." ".$simbol;
    }); 
  }
}