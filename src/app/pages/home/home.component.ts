import { Component, OnInit, AfterViewInit, ElementRef } from '@angular/core';
import { ChartOptions, ChartType, ChartDataSets } from 'chart.js';
import { Label } from 'ng2-charts';
import * as pluginDataLabels from 'chartjs-plugin-datalabels';
import * as $ from 'jquery';

import { HomeService } from './service/home.service';
import { ProductsService } from '../user-profile/products/services/products.service';
import { Response } from 'src/app/interfaces/response';




@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.scss']
})
export class HomeComponent implements OnInit, AfterViewInit {

  public barChartOptions: ChartOptions = {
    responsive: true,
    legend: {
      position: 'bottom',
    },
    plugins: {
      datalabels: {
        formatter: (value, ctx) => {
          const label = ctx.chart.data[ctx.dataIndex];
          return label;
        },
        anchor: 'end',
        align: 'end',
      },
    },
    // We use these empty structures as placeholders for dynamic theming.
    scales: {
      xAxes: [{}],
      yAxes: [{}]
    },
  };


  barChartData: ChartDataSets[];
  barAreaStatData: ChartDataSets[];

  public barChartLabels: Label[] = ['1000 AZN'];
  public barAreaStatLabels: Label[] = [''];
  public barChartType: ChartType = 'bar';
  public barChartLegend = true;
  public barChartPlugins = [pluginDataLabels];


  allNews: any;
  newOwlOptions: any;
  membersOwlOptions: any;
  productList: any;
  membersList: any;
  productStat: any;
  currencyStat: any;
  metalsStat: any;
  chartProductStat: any;

  constructor(
    public homeService: HomeService,
    private productService: ProductsService,
    private elementRef: ElementRef,
  ) {
    this.getCurrencyStat();
    this.getAppleStat();
    this.barChartData = [
      { data: [], label: '' },
      { data: [], label: '' },
      { data: [], label: '' },
      { data: [], label: '' }
    ];

    this.barAreaStatData = [
      {data: [358], label: 'Bakı şəhəri'},
      {data: [23966], label: 'Gəncə-Qazax'},
      {data: [26057], label: 'Şəki-Zaqatala'},
      {data: [1323], label: 'Lənkəran'},
      {data: [196623], label: 'Guba-Xaçmaz'},
      {data: [5795], label: 'Aran rayonu'},
      {data: [6695], label: 'Daglıg Şırvan rayonu'},
      {data: [14915], label: 'Naxçıvan MR'},
    ];
    this.barAreaStatLabels = ['Alma (Ton)'];
  }

  ngOnInit() {
    this.getAllNews();
    this.makeCarouselOptions();
    this.getAllProduct();
    this.getAllMembers();
    this.getAStatistics();
    $('.chart-menu li').click(function() {
      $(this).addClass('active');
      $(this).siblings().removeClass('active');
    });
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
      // tslint:disable-next-line: triple-equals
      if (response.responseCode == 1) {
        this.allNews = response.responseContent.data;
      }
    });
  }

  getAllMembers() {
    this.homeService.getAllUsers().subscribe(response => {
      // tslint:disable-next-line: triple-equals
      if (response.responseCode == 1) {
        this.membersList = response.responseContent.data;
      }
    });
  }

  getAllProduct() {
    this.productService.getAllProducts({ perpage: '7' }).subscribe((response: Response) => {
      // tslint:disable-next-line: triple-equals
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
    this.homeService.statistics({ per_page: 8 }).subscribe((response: Response) => {
      // tslint:disable-next-line: triple-equals
      if (response.responseCode == 1) {
        this.productStat = response.responseContent.data;
      }
    });
  }
  getCurrencyStat() {
    this.homeService.curencyStat().subscribe((response: Response) => {
      // tslint:disable-next-line: triple-equals
      if (response.responseCode == 1) {
        this.currencyStat = response.responseContent;
        this.barChartData = [
          { data: [], label: '' },
          { data: [], label: '' },
          { data: [], label: '' },
          { data: [], label: '' }
        ];
        // tslint:disable-next-line: max-line-length
        this.barChartData[0].data = [this.currencyStat.USD.Value];
        this.barChartData[0].label = this.currencyStat.USD.Name;
        this.barChartData[1].data = [this.currencyStat.RUB.Value];
        this.barChartData[1].label = this.currencyStat.RUB.Name;
        this.barChartData[2].data = [this.currencyStat.EUR.Value];
        this.barChartData[2].label = this.currencyStat.EUR.Name;
        this.barChartData[3].data = [this.currencyStat.TRY.Value];
        this.barChartData[3].label = this.currencyStat.TRY.Name;
      }
    });
  }

  getMetalsStat() {
    this.homeService.metalStat().subscribe((response: Response) => {
      // tslint:disable-next-line: triple-equals
      if (response.responseCode == 1) {
        this.metalsStat = response.responseContent;
        this.barChartData = [
          { data: [], label: '' },
          { data: [], label: '' },
          { data: [], label: '' },
          { data: [], label: '' }
        ];
        this.barChartData[0].data = [this.metalsStat.XAG.Value.toFixed(2)];
        this.barChartData[0].label = this.metalsStat.XAG.Name;
        this.barChartData[1].data = [this.metalsStat.XAU.Value.toFixed(2)];
        this.barChartData[1].label = this.metalsStat.XAU.Name;
        this.barChartData[2].data = [this.metalsStat.XPD.Value.toFixed(2)];
        this.barChartData[2].label = this.metalsStat.XPD.Name;
        this.barChartData[3].data = [this.metalsStat.XPT.Value.toFixed(2)];
        this.barChartData[3].label = this.metalsStat.XPT.Name;
      }
    });
  }

  getProductStat() {
    this.homeService.productsStat().subscribe((response: Response) => {
      // tslint:disable-next-line: triple-equals
      if (response.responseCode == 1) {
        this.chartProductStat = response.responseContent;
        this.chartProductStat = this.chartProductStat.map(r => ({
          label: r.Name + ' ' + '1' + r.Unit,
          data: [r.Value]
        }));
        this.barChartData = this.chartProductStat;
      }
    });
  }
  changeMetalChart() {
    this.getMetalsStat();
  }
  changeProductChart() {
    this.getProductStat();
  }

  getAppleStat() {
    this.barAreaStatLabels = ['Alma (Ton)'];
    this.barAreaStatData = [
      {data: [358], label: 'Bakı şəhəri'},
      {data: [23966], label: 'Gəncə-Qazax'},
      {data: [26057], label: 'Şəki-Zaqatala'},
      {data: [1323], label: 'Lənkəran'},
      {data: [196623], label: 'Guba-Xaçmaz'},
      {data: [5795], label: 'Aran rayonu'},
      {data: [6695], label: 'Daglıg Şırvan rayonu'},
      {data: [14915], label: 'Naxçıvan MR'},

    ];
  }

  getPeachStat() {
    this.barAreaStatLabels = ['Şaftalı (Ton)'];
    this.barAreaStatData = [
      {data: [142], label: 'Bakı şəhəri'},
      {data: [5495], label: 'Gəncə-Qazax'},
      {data: [1902], label: 'Şəki-Zaqatala'},
      {data: [424], label: 'Lənkəran'},
      {data: [7737], label: 'Guba-Xaçmaz'},
      {data: [3873], label: 'Aran rayonu'},
      {data: [5802], label: 'Naxçıvan MR'},
    ];
  }

  getCornStat() {
    this.barAreaStatLabels = ['Buğda (Ton)'];
    this.barAreaStatData = [
      {data: [229908], label: 'Gəncə-Qazax'},
      {data: [292466], label: 'Şəki-Zaqatala'},
      {data: [153018], label: 'Guba-Xaçmaz'},
      {data: [685930], label: 'Aran rayonu'},
    ];
  }

  getPalmStat() {
    this.barAreaStatLabels = ['Xurma (Ton)'];
    this.barAreaStatData = [
      {data: [66828], label: 'Gəncə-Qazax'},
      {data: [22158], label: 'Şəki-Zaqatala'},
      {data: [8591], label: 'Guba-Xaçmaz'},
      {data: [54930], label: 'Aran rayonu'},
    ];
  }

  getNutStat() {
    this.barAreaStatLabels = ['Fındıq (Ton)'];
    this.barAreaStatData = [
      {data: [1141], label: 'Gəncə-Qazax'},
      {data: [39543], label: 'Şəki-Zaqatala'},
      {data: [10071], label: 'Guba-Xaçmaz'},
      {data: [160001], label: 'Aran rayonu'},
    ];
  }

  getApricotStat() {
    this.barAreaStatLabels = ['Ərik (Ton)'];
    this.barAreaStatData = [
      {data: [170], label: 'Bakı şəhəri'},
      {data: [7108], label: 'Gəncə-Qazax'},
      {data: [1882], label: 'Şəki-Zaqatala'},
      {data: [271], label: 'Lənkəran'},
      {data: [1354], label: 'Guba-Xaçmaz'},
      {data: [7160], label: 'Aran rayonu'},
      {data: [1342], label: 'Daglıg Şırvan rayonu'},
      {data: [9106], label: 'Naxçıvan MR'},

    ];
  }
}
