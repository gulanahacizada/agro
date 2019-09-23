import { Component, OnInit } from '@angular/core';
import { AppService } from 'src/app/services/app/app.service';
import { Router } from '@angular/router';
import { HomeService } from './service/home.service';
import { ProductsService } from '../user-profile/products/services/products.service';
import { Response } from 'src/app/interfaces/response';


@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {

  allNews: any;
  newOwlOptions: any;
  productList: any;

  constructor(
    // private appService: AppService,
    private homeService: HomeService,
    private productService: ProductsService,
    // private router: Router,
  ) { }

  ngOnInit() {
    // this.getAllNews();
    this.makeCarouselOptions();
    this.getAllProduct();
  }


getAllNews() {
  this.homeService.allNews().subscribe(response => {
    this.allNews = response.articles;
    console.log(this.allNews);
  });
}

getAllProduct() {
  this.productService.getAllProducts().subscribe( (response: Response) => {
      this.productList = response.responseContent.data;
      console.log(this.productList);
  });
}

makeCarouselOptions() {
  this.newOwlOptions = {
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    dots: false,
    singleItem: true,
    lazyLoad: true,
    nav: true,
    navText: ['❮', '❯'],
    navClass: ['owl-prev', 'owl-next'],
    responsive : {
      0 : {
        items: 2,
        nav: false,
        dots: true
      },
      575 : {
        items: 3
      },
      768 : {
        items: 4
      },
      992 : {
        items: 4
      }
    }
  };
}

}
