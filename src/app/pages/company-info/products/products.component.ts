import { Component, OnInit } from '@angular/core';
import { ProductsService } from '../../user-profile/products/services/products.service';
import { Response } from 'src/app/interfaces/response';
import { UrlSegmentGroup, UrlTree, Router, PRIMARY_OUTLET } from '@angular/router';

@Component({
  selector: 'app-products',
  templateUrl: './products.component.html',
  styleUrls: ['./products.component.scss']
})
export class ProductsComponent implements OnInit {

  productList: any[];
  id: any;
  selfId: any;
  url: any;
  primary: UrlSegmentGroup;
  tree: UrlTree;

  constructor(
    public productService: ProductsService,
    private router: Router
  ) { this.getRoutes(this.url); }


  ngOnInit() {
    this.getCompanyProducts();
  }


  getCompanyProducts() {
    this.productService.getAllProducts({ user_id: this.id }).subscribe((response: Response) => {
      if (response.responseCode == 1) {
        this.productList = response.responseContent.data;
      }
    });
  }


  getRoutes(url) {
    this.url = this.router.routerState.snapshot.url;
    this.tree = this.router.parseUrl(this.url);
    this.primary = this.tree.root.children[PRIMARY_OUTLET];
    this.id = (this.primary.segments[2] || { path: null }).path;
  }

}
