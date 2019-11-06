import { Component, OnInit, AfterViewInit, ElementRef } from '@angular/core';
import { ChartOptions, ChartType, ChartDataSets } from 'chart.js';
import { Label } from 'ng2-charts';
import * as pluginDataLabels from 'chartjs-plugin-datalabels';

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
    // We use these empty structures as placeholders for dynamic theming.
    scales: {
      xAxes: [{}],
      yAxes: [{}]
    },
  };

  public pieChartOption: ChartOptions = {
    responsive: true,
    legend: {
      position: 'bottom',
    },
    plugins: {
      datalabels: {
        formatter: (value, ctx) => {
          const label = ctx.chart.data.labels[ctx.dataIndex];
          return label;
        },
      },
    }

  };
  barChartData: ChartDataSets[];
  pieChartData: ChartDataSets[];

  public barChartLabels: Label[] = ['1000 AZN'];
  public barChartType: ChartType = 'bar';
  public barChartLegend = true;


  public pieChartType: ChartType = 'pie';
  public pieChartLabels: Label[] = ['', '', '', ''];
  public pieChartPlugins = [pluginDataLabels];


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
    this.barChartData = [
      { data: [], label: '' },
      { data: [], label: '' },
      { data: [], label: '' },
      { data: [], label: '' }
    ];
    this.pieChartData = [
      { data: [0, 0, 0, 0] },
    ];
  }

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
        // this.barChartData = [
        //   { data: [], label: '' },
        //   { data: [], label: '' },
        //   { data: [], label: '' },
        //   { data: [], label: '' }
        // ];
        // tslint:disable-next-line: max-line-length
        this.pieChartData[0].data = [
          this.currencyStat.USD.Value.toFixed(1),
          this.currencyStat.RUB.Value.toFixed(1),
          this.currencyStat.EUR.Value.toFixed(1),
          this.currencyStat.TRY.Value.toFixed(1)
        ];
        this.pieChartLabels = ['USD', 'RUB', 'EUR', 'TL'];
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

        this.pieChartData[0].data = [
          this.metalsStat.XAG.Value.toFixed(1),
          this.metalsStat.XAU.Value.toFixed(1),
          this.metalsStat.XPD.Value.toFixed(1),
          this.metalsStat.XPT.Value.toFixed(1)
        ];
        this.pieChartLabels = [
          this.metalsStat.XAG.Name,
          this.metalsStat.XAU.Name,
          this.metalsStat.XPD.Name,
          this.metalsStat.XPT.Name
          ];

        this.barChartData[0].data = [this.metalsStat.XAG.Value];
        this.barChartData[0].label = this.metalsStat.XAG.Name;
        this.barChartData[1].data = [this.metalsStat.XAU.Value];
        this.barChartData[1].label = this.metalsStat.XAU.Name;
        this.barChartData[2].data = [this.metalsStat.XPD.Value];
        this.barChartData[2].label = this.metalsStat.XPD.Name;
        this.barChartData[3].data = [this.metalsStat.XPT.Value];
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
          label: r.Name,
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
}
