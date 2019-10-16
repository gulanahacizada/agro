import { Component, OnInit } from '@angular/core';
import { AppService } from 'src/app/services/app/app.service';
import { Router } from '@angular/router';
import { HomeService } from './service/home.service';
import { ProductsService } from '../user-profile/products/services/products.service';
import { Response } from 'src/app/interfaces/response';


@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.scss']
})
export class HomeComponent implements OnInit {

  allNews: any;
  newOwlOptions: any;
  productList: any;
  membersList: any;

  constructor(
    private homeService: HomeService,
    private productService: ProductsService,
  ) { }

  ngOnInit() {
    this.getAllNews();
    this.makeCarouselOptions();
    this.getAllProduct();
    this.getAllMembers();
  }


  getAllNews() {
    this.homeService.getNews().subscribe(response => {
      if (response.responseCode == 1) {
        this.allNews = response.responseContent.data;
      }
    });
  }

  getAllMembers() {
    this.homeService.getAllUsers().subscribe(response => {
      if (response.responseCode == 1) {
        this.membersList = response.responseContent.data;

      }
    });
  }

  getAllProduct() {
    this.productService.getAllProducts().subscribe((response: Response) => {
      this.productList = response.responseContent.data;
    });
  }

  makeCarouselOptions() {
    this.newOwlOptions = {
      loop: true,
      margin: 15,
      autoplay: true,
      autoplayTimeout: 3000,
      autoplayHoverPause: true,
      dots: false,
      singleItem: true,
      lazyLoad: true,
      nav: true,
      navText: ['❮', '❯'],
      navClass: ['owl-prev', 'owl-next'],
      responsive: {
        0: {
          items: 2,
          nav: false,
          dots: true
        },
        575: {
          items: 3
        },
        768: {
          items: 4
        },
        992: {
          items: 4
        }
      }
    };
  }

}
