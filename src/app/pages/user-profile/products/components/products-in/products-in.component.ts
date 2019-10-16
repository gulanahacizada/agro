import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { ProductsService } from '../../services/products.service';
import { Response } from 'src/app/interfaces/response';


@Component({
  selector: 'app-products-in',
  templateUrl: './products-in.component.html',
  styleUrls: ['./products-in.component.scss']
})
export class ProductsInComponent implements OnInit {

  productResponse: any;
  id: '';
  activeLang = localStorage.getItem('lang');
  description: string;
  kind: string;
  kolibry: any;
  unit: string;
  userId: any;

  constructor(
    private productService: ProductsService,
    private activateRoute: ActivatedRoute,
  ) {
    this.id = this.activateRoute.snapshot.params.id;
  }

  ngOnInit() {
    this.getProdById();
  }

  getProdById() {
    this.productService.getProdById(this.id).subscribe((response: Response) => {
      if (response.responseCode == 1) {
        this.productResponse = response.responseContent;
        this.description = response.responseContent[`description_${this.activeLang}`];
        this.userId = response.responseContent.user.id
      }
    });
  }

}
