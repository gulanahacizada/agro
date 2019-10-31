import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { ProductsService } from '../../services/products.service';
import { Response } from 'src/app/interfaces/response';
import { Packege } from 'src/app/interfaces/packege';
import { SelectList } from 'src/app/interfaces/selectList';
import { Quality } from 'src/app/interfaces/quality';
import { Unit } from 'src/app/interfaces/unit';
import { Kalibry } from 'src/app/interfaces/kalibry';
import { Category } from 'src/app/interfaces/category';
import { Kinds } from 'src/app/interfaces/kinds';

import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { TranslateService } from '@ngx-translate/core';

@Component({
  selector: 'app-edit-product',
  templateUrl: './edit-product.component.html',
  styleUrls: ['./edit-product.component.scss']
})
export class EditProductComponent implements OnInit {
  id: '';
  lang = 'az';
  productEditForm: FormGroup;
  productResponse: any;

  packegeList: SelectList[];
  qualityList: SelectList[];
  unitList: SelectList[];
  kalibryList: SelectList[];
  categoryList: SelectList[];
  productList: SelectList[];
  kindList: SelectList[];
  kinds: Kinds[];
  products: any;
  category: Category[];
  kalibry: Kalibry[];
  packages: Packege[];
  units: Unit[];
  quality: Quality[];

  imgURL: any;
  file: any;
  fileRaw: string;
  url: string;
  selectCategory: any;
  selectLang = 1;
  selectUnit = '';
  product_edited: boolean = false;


  constructor(
    private productService: ProductsService,
    private activateRoute: ActivatedRoute,
    private router: Router,
    private fb: FormBuilder,
    public translate: TranslateService
  ) {
    this.translate.setDefaultLang(localStorage.getItem('lang'));
    this.id = this.activateRoute.snapshot.params.id;
    }

  ngOnInit() {
    this.createProdEditForm();
    this.getProdById();
    this.getAllCategory('az'); //
    this.getAllQuality('az'); //
    this.getAllPackege('az'); //
    this.getAllKalibry('az'); //
    this.getAllUnits('az'); //
  }

  createProdEditForm() {
    this.productEditForm = this.fb.group({
      // parent_id: [],
      category_id: [, [Validators.required]],
      kind_id: [, [Validators.required]],
      quality_id: [, Validators.required],
      package_id: [, Validators.required],
      kalibry_id: [],
      unit_id: [, Validators.required],
      common: [, Validators.required],
      price: [, Validators.required],
      accumulated_at: [''],
      expiry_time: [''],
      id: [''],
      description_az: [''],
      description_en: [''],
      description_ru: ['']
    });
  }

  getProdById() {
    this.productService.getProdById(this.id).subscribe((response: Response) => {
      this.productResponse = response.responseContent;
      this.selectUnit = this.productResponse.unit.name;
      this.productEditForm.patchValue({
        // parent_id: this.productResponse.category.parent_id,
        id: this.productResponse.id,
        category_id: this.productResponse.category_id,
        package_id: this.productResponse.package_id,
        unit_id: this.productResponse.unit_id,
        price: this.productResponse.price,
        accumulated_at: this.productResponse.accumulated_at,
        expiry_time: this.productResponse.expiry_time,
        common: this.productResponse.common,
        description_az: this.productResponse.description_az,
        description_en: this.productResponse.description_en,
        description_ru: this.productResponse.description_ru,
        kind_id: this.productResponse.kind_id,
        quality_id: this.productResponse.quality_id,
        kalibry_id: this.productResponse.kalibry_id,
        // image: this.productResponse.images[0],
      });
    });
  }


  getAllUnits(lang) {
    this.productService.getUnits({lang}).subscribe((response: Response) => {
      this.units = response.responseContent;
      this.unitList = (this.units || []).map((r: any) => ({
        label: r.name,
        value: r.id
      }));
    });
  }

  getAllPackege(lang) {
    this.productService.getPackege({lang}).subscribe((response: Response) => {
      this.packages = response.responseContent;
      this.packegeList = (this.packages || []).map((r: any) => ({
        label: r.name,
        value: r.id
      }));

    });
  }

  getAllKalibry(lang) {
    this.productService.getKalibry({lang}).subscribe((response: Response) => {
      this.kalibry = response.responseContent;
      this.kalibryList = (this.kalibry || []).map((r: any) => ({
        label: r.name,
        value: r.id
      }));
    });
  }

  getAllQuality(lang) {
    this.productService.getQuality({lang}).subscribe((response: Response) => {
      this.quality = response.responseContent;
      this.qualityList = (this.quality || []).map((r: any) => ({
        label: r.name,
        value: r.id
      }));
    });
  }

  getAllCategory(lang) {
    this.productService.getCategory({lang}).subscribe((response: Response) => {
      this.category = response.responseContent;
      this.categoryList = (this.category || []).map((r: any) => ({
        label: r.name,
        value: r
      }));
    });
  }

  onSelectCategory(event) {
    this.products = event.value.sub_categories;
    this.productList = (this.products || []).map((r: any) => ({
      label: r.name,
      value: r.id
    }));
  }

  onSelectProduct(event) {
    this.getKindByCategory(event.value);
  }

  // mapProducts() {
  //   this.selectCategory = this.productResponse.name.parent.id;
  //   // tslint:disable-next-line: triple-equals
  //   const prodList = this.category.filter(e => e.id == this.selectCategory);
  //   this.productList = (prodList[0].subCategories).map((r: any) => ({
  //     label: r.name_az,
  //     value: r.id
  //   }));
  // }

  getKindByCategory(id) {
    const params = {
      category_id: id,
      lang: this.lang
    };

    this.productService.getKinByCategory(params).subscribe((response: Response) => {
      this.kinds = response.responseContent;
      this.kindList = (this.kinds || []).map((r: any) => ({
        label: r.name,
        value: r.id
      }));
    });
  }


  onChangeLanguage(lang, i) {
    this.selectLang = i;
    this.lang = lang;
    this.getAllCategory(lang); //
    this.getAllQuality(lang); //
    this.getAllPackege(lang); //
    this.getAllKalibry(lang); //
    this.getAllUnits(lang); //
  }

  // onFileChange(event) {
  //   if (event.target.files && event.target.files[0]) {
  //     const reader = new FileReader();
  //     const file = event.target.files[0];
  //     this.file = file;
  //     reader.readAsDataURL(file);
  //     // reader.onload = () => {
  //     //   this.imgURL = reader.result;
  //     //   this.fileRaw = (<string>reader.result).split(',')[1];
  //     //   this.url = reader.result.toString();
  //     // };
  //   }
  // }

  updateProduct() {
    this.product_edited = true;
    this.productService.updateProduct(this.productEditForm.value).subscribe((response: Response) => {
      if (response.responseCode == 1) {
        this.router.navigate(['/dashboard/products']);
      }
    });
  }

  onUnitSelect(event) {
    this.selectUnit = event.originalEvent.target.textContent;
  }
}
