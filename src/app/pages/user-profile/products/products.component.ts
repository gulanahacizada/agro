import { Component, OnInit } from '@angular/core';
import { Response } from 'src/app/interfaces/response';
import { ProductsService } from './services/products.service';

@Component({
  selector: 'app-products',
  templateUrl: './products.component.html',
  styleUrls: ['./products.component.scss']
})
export class ProductsComponent implements OnInit {

  productList: any[];

  constructor(
    public  productService: ProductsService,
  ) { }

  ngOnInit() {
    this.getMyProduct();
  }

  getMyProduct() {
    this.productService.getMyProduct().subscribe((response: Response) => {
      if (response.responseCode == 1) {
        this.productList = response.responseContent.data;
      }
    });
  }

}
