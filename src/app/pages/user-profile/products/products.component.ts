import { Component, OnInit } from '@angular/core';
import { Response } from 'src/app/interfaces/response';
import { ProductsService } from './services/products.service';
import { TranslateService } from '@ngx-translate/core';

@Component({
  selector: 'app-products',
  templateUrl: './products.component.html',
  styleUrls: ['./products.component.scss']
})
export class ProductsComponent implements OnInit {

  productList: any[];
  pagination = {
    per_page: 10,
    total: null,
    page: 1
  };

  constructor(
    public productService: ProductsService,
    public translate: TranslateService
    ) {this.translate.setDefaultLang(localStorage.getItem('lang')); }

  ngOnInit() {
    this.getMyProduct();
  }

  getMyProduct() {
    this.productService.getMyProduct({ page: this.pagination.page, per_page: this.pagination.per_page }).subscribe((response: Response) => {
      if (response.responseCode == 1) {
        this.productList = response.responseContent.data;
        this.pagination.per_page = response.responseContent.per_page;
        this.pagination.total = response.responseContent.total;
      }
    });
  }

  paginate(e) {
    this.pagination.page = e.page + 1;
    this.pagination.per_page = e.rows;
    this.getMyProduct();
  }

}
