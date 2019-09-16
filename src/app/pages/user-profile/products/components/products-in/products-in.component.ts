import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
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
      this.productResponse = response.responseContent;
      console.log(this.productResponse);
    });
  }

}
