import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { Response } from 'src/app/interfaces/response';
import { ProductsService } from '../../user-profile/products/services/products.service';
import { SelectList } from 'src/app/interfaces/selectList';
import { Category } from 'src/app/interfaces/category';
import { AppService } from 'src/app/services/app/app.service';
import { Kinds } from 'src/app/interfaces/kinds';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { BirjaService } from './services/birja.service';

@Component({
  selector: 'app-birja',
  templateUrl: './birja.component.html',
  styleUrls: ['./birja.component.scss']
})
export class BirjaComponent implements OnInit {

  productList: any;
  productInfo: any;
  category: Category[];
  kinds: Kinds[];
  sellerUsers: any;

  categoryList: SelectList[];
  kindList: SelectList[];
  prodSelectList: SelectList[];
  sellerList: SelectList[];

  filterForm: FormGroup;

  constructor(
    private productService: ProductsService,
    private appService: AppService,
    private fb: FormBuilder,
    public birjaService: BirjaService
  ) { }

  ngOnInit() {
    this.getAllProducts();
    this.getAllCategory();
    this.getSellerUsers();
    this.createFilterForm();
  }

  getAllProducts() {
    this.productService.getAllProducts().subscribe((response: Response) => {
        this.productList = response.responseContent.data;
        console.log(this.productList);
        
    });
  }

  getAllCategory() {
    this.productService.getCategory().subscribe((response: Response) => {
      this.category = response.responseContent;
      this.categoryList = (this.category || []).map((r: any) => ({
        label: r.name,
        value: r
      }));
    });
  }

  getSellerUsers() {
    this.appService.sellerUsers().subscribe((response: Response) => {
      this.sellerUsers = response.responseContent;
      this.sellerList = (this.sellerUsers || []).map((r: any) => ({
        label: r.name,
        value: r.id
      }));
    });
  }

  onSelectCategory(event) {
    this.productInfo = event.value.subCategories;
    this.prodSelectList = (this.productInfo || []).map((r: any) => ({
      label: r.name,
      value: r.id
    }));
  }

  onSelectProduct(event) {
    this.getKindByCategory(event.value);
  }

  getKindByCategory(id) {
    const params = {
      category_id: id
    };
    this.productService.getKinByCategory(params).subscribe((response: Response) => {
      this.kinds = response.responseContent;
      this.kindList = (this.kinds || []).map((r: any) => ({
        label: r.name,
        value: r.id
      }));
    });
  }

  createFilterForm() {
    this.filterForm = this.fb.group({
      category_id: [],
      kind_id:     [],
      user_id:     [],
      from:        [],
      to:          []
    });
  }


  clean(obj) {
    for (const propName in obj) {
      if (obj[propName] === null || obj[propName] === undefined || obj[propName] === "" || obj[propName][0] == [""]) {
        delete obj[propName];
      }
    }
  }

  submitForm() {
    this.clean(this.filterForm.value);
    this.productService.getAllProducts(this.filterForm.value).subscribe((response: Response) => {
      this.productList = response.responseContent.data;
    });
  }

  // selectProduct(id: any) {
  // }








}
