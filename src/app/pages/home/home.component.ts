import { Component, OnInit, AfterViewInit, ElementRef } from '@angular/core';
import { HomeService } from './service/home.service';
import { ProductsService } from '../user-profile/products/services/products.service';
import { Response } from 'src/app/interfaces/response';



@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.scss']
})
export class HomeComponent implements OnInit, AfterViewInit {

  allNews: any;
  newOwlOptions: any;
  membersOwlOptions: any;
  productList: any;
  membersList: any;
  productStat: any;

  constructor(
    public homeService: HomeService,
    private productService: ProductsService,
    private elementRef: ElementRef,
  ) { }

  ngOnInit() {
    this.getAllNews();
    this.makeCarouselOptions();
    this.getAllProduct();
    this.getAllMembers();
    this.getAStatistics();
  }

  ngAfterViewInit() {
    const mapCreate = document.createElement('script');
    mapCreate.type = 'text/javascript';
    mapCreate.src = '../assets/scripts/mapCreate.js';
    this.elementRef.nativeElement.appendChild(mapCreate);
    const mapData = document.createElement('script');
    mapData.type = 'text/javascript';
    mapData.src = '../assets/scripts/mapData.js';
    this.elementRef.nativeElement.appendChild(mapData);
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
    this.productService.getAllProducts({ perpage: '7' }).subscribe((response: Response) => {
      if (response.responseCode == 1) {
        this.productList = response.responseContent.data;
      }
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
    this.membersOwlOptions = {
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
          items: 5
        },
        992: {
          items: 5
        }
      }
    };
  }

  getAStatistics() {
    this.homeService.statistics({ per_page: 7 }).subscribe((response: Response) => {
        if (response.responseCode == 1) {
          this.productStat = response.responseContent.data;
        }
    });
  }
}
