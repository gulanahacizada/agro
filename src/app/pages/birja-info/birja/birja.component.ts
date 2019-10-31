import { Component, OnInit } from '@angular/core';
import { Response } from 'src/app/interfaces/response';
import { ProductsService } from '../../user-profile/products/services/products.service';
import { SelectList } from 'src/app/interfaces/selectList';
import { Category } from 'src/app/interfaces/category';
import { AppService } from 'src/app/services/app/app.service';
import { Kinds } from 'src/app/interfaces/kinds';
import { FormBuilder, FormGroup } from '@angular/forms';
import { BirjaService } from './services/birja.service';
import { TranslateService } from '@ngx-translate/core';

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
  pagination = {
    per_page: 10,
    total: null,
    page: 1
  };
  count: number = 0;

  constructor(
    private productService: ProductsService,
    private appService: AppService,
    private fb: FormBuilder,
    public birjaService: BirjaService,
    public translate: TranslateService
  ) {
    this.translate.setDefaultLang(localStorage.getItem('lang'));
   }

  ngOnInit() {
    this.getAllProducts();
    this.getAllCategory();
    this.getSellerUsers();
    this.createFilterForm();
  }

  getAllProducts() {
    this.productService.getAllProducts({ page: this.pagination.page, per_page: this.pagination.per_page }).subscribe((response: Response) => {
      if (response.responseCode == 1) {
        this.productList = response.responseContent.data;
        this.pagination.per_page = response.responseContent.per_page;
        this.pagination.total = response.responseContent.total;
      }
    });
  }

  getAllCategory() {
    this.productService.getCategory().subscribe((response: Response) => {
      if (response.responseCode == 1) {
        this.category = response.responseContent;
        this.categoryList = (this.category || []).map((r: any) => ({
          label: r.name,
          value: r
        }));
      }
    });
  }

  getSellerUsers() {
    this.appService.sellerUsers().subscribe((response: Response) => {
      if (response.responseCode == 1) {
        this.sellerUsers = response.responseContent;
        this.sellerList = (this.sellerUsers || []).map((r: any) => ({
          label: r.name,
          value: r.id
        }));
      }
    });
  }

  onSelectCategory(event) {
    this.productInfo = event.value.sub_categories;
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
      if (response.responseCode == 1) {
        this.kinds = response.responseContent;
        this.kindList = (this.kinds || []).map((r: any) => ({
          label: r.name,
          value: r.id
        }));
      }
    });
  }

  createFilterForm() {
    this.filterForm = this.fb.group({
      category_id: [],
      kind_id: [],
      user_id: [],
      from: [],
      to: [],
      page: this.pagination.page,
      per_page: this.pagination.per_page
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
    this.count++;
    if (this.count == 1) {
      this.pagination.page = 1;
      this.filterForm.patchValue({
        page: this.pagination.page,
        per_page: this.pagination.per_page
      });
      this.clean(this.filterForm.value);
    }
    this.productService.getAllProducts(this.filterForm.value).subscribe((response: Response) => {
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
    if (this.count) {
      this.submitForm();
    } else {
      this.getAllProducts();
    }
  }

  resetSerch() {
    this.count = 0;
    this.pagination.per_page = 10;
    this.pagination.page = 1;
    this.getAllProducts();
  }
}
