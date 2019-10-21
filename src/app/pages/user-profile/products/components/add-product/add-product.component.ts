import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { ProductsService } from '../../services/products.service';
import { Response } from 'src/app/interfaces/response';
import { Packege } from 'src/app/interfaces/packege';
import { SelectList } from 'src/app/interfaces/selectList';
import { Quality } from 'src/app/interfaces/quality';
import { Unit } from 'src/app/interfaces/unit';
import { Kalibry } from 'src/app/interfaces/kalibry';
import { Category } from 'src/app/interfaces/category';
import { Kinds } from 'src/app/interfaces/kinds';
import * as $ from 'jquery';


import { FormBuilder, FormGroup, Validators } from '@angular/forms';

@Component({
  selector: 'app-add-product',
  templateUrl: './add-product.component.html',
  styleUrls: ['./add-product.component.scss']
})
export class AddProductComponent implements OnInit {

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
  product_added: boolean = false;

  productForm: FormGroup;
  lang = 'az';
  imgURL: any;
  file: any;
  fileRaw: string;
  url: string;
  selectLang = 1;
  selectUnit = '';


  constructor(
    private productService: ProductsService,
    private router: Router,
    private fb: FormBuilder,
  ) { }

  ngOnInit() {
    this.getAllCategory('az'); //
    this.getAllQuality('az'); //
    this.getAllPackege('az'); //
    this.getAllKalibry('az'); //
    this.getAllUnits('az'); //
    this.createProdForm(); //
  }

  getAllUnits(lang) {
    this.productService.getUnits({ lang }).subscribe((response: Response) => {
      this.units = response.responseContent;
      this.unitList = (this.units || []).map((r: any) => ({
        label: r.name,
        value: r.id
      }));
    });
  }

  getAllPackege(lang) {
    this.productService.getPackege({ lang }).subscribe((response: Response) => {
      this.packages = response.responseContent;
      this.packegeList = (this.packages || []).map((r: any) => ({
        label: r.name,
        value: r.id
      }));

    });
  }

  getAllKalibry(lang) {
    this.productService.getKalibry({ lang }).subscribe((response: Response) => {
      this.kalibry = response.responseContent;
      this.kalibryList = (this.kalibry || []).map((r: any) => ({
        label: r.name,
        value: r.id
      }));
    });
  }

  getAllQuality(lang) {
    this.productService.getQuality({ lang }).subscribe((response: Response) => {
      this.quality = response.responseContent;
      this.qualityList = (this.quality || []).map((r: any) => ({
        label: r.name,
        value: r.id
      }));
    });
  }

  getAllCategory(lang) {
    this.productService.getCategory({ lang }).subscribe((response: Response) => {
      this.category = response.responseContent;
      this.categoryList = (this.category || []).map((r: any) => ({
        label: r.name,
        value: r
      }));
    });
  }



  onChangeLanguage(lang, i) {
    this.selectLang = i;
    this.lang = lang;
    // $('.selectLang').click( function() {
    //   $(this).find('span').addClass('bg-green');
    // });
    this.getAllCategory(lang); //
    this.getAllQuality(lang); //
    this.getAllPackege(lang); //
    this.getAllKalibry(lang); //
    this.getAllUnits(lang); //
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


  createProdForm() {
    this.productForm = this.fb.group({
      category_id: [, [Validators.required]],
      kind_id: [, [Validators.required]],
      quality_id: [, Validators.required],
      package_id: [, Validators.required],
      kalibry_id: [, Validators.required],
      unit_id: [, Validators.required],
      common: [, Validators.required],
      price: [, Validators.required],
      accumulated_at: [''],
      expiry_time: [''],
      image: [''],
      description_az: [''],
      description_en: [''],
      description_ru: ['']
    });
  }

  onFileChange(event) {
    if (event.target.files && event.target.files[0]) {
      const reader = new FileReader();
      const file = event.target.files[0];
      this.file = file;
      reader.readAsDataURL(file);
      // reader.onload = () => {
      //   this.imgURL = reader.result;
      //   this.fileRaw = (<string>reader.result).split(',')[1];
      //   this.url = reader.result.toString();

      // };
    }
  }

  onUnitSelect(event) {
    this.selectUnit = event.originalEvent.target.textContent;
  }


  addProduct() {
    this.product_added = true;
    this.productService.createProduct(this.productForm.value, this.file).subscribe((res: any) => {
      if (res.body && res.body.responseCode == 1) {
        this.router.navigate(['/dashboard/products']);
      }
    });
  }

}
