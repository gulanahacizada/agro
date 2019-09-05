import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { ProductsService } from '../../services/products.service';

@Component({
  selector: 'app-add-product',
  templateUrl: './add-product.component.html',
  styleUrls: ['./add-product.component.scss']
})
export class AddProductComponent implements OnInit {


  constructor(
    private productService: ProductsService,
    private router: Router,
  ) {  }

  ngOnInit() {
    this.getAllUnits();
    this.getAllCategory();
    this.getAllKalibry();
    this.getAllPackege();
    this.getAllQuality();
  }


getAllUnits() {
  this.productService.getUnits().subscribe(response => {
    console.log(response.responseContent);
  });
}

getAllPackege() {
  this.productService.getPackege().subscribe(response => {
    console.log(response.responseContent);
  });
}

getAllKalibry() {
  this.productService.getKalibry().subscribe(response => {
    console.log(response.responseContent);
  });
}

getAllQuality() {
  this.productService.getQuality().subscribe(response => {
    console.log(response.responseContent);
  });
}

getAllCategory() {
  this.productService.getCategory().subscribe(response => {
    console.log(response.responseContent);
  });
}

}
