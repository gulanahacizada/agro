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

@Component({
  selector: 'app-edit-product',
  templateUrl: './edit-product.component.html',
  styleUrls: ['./edit-product.component.scss']
})
export class EditProductComponent implements OnInit {
  id: '';
  lang =  'az';
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
  selectLang = 1;
  selectCategory: any;

  constructor(
    private productService: ProductsService,
    private activateRoute: ActivatedRoute,
    private router: Router,
    private fb: FormBuilder,
  ) {
    this.id = this.activateRoute.snapshot.params.id;
  }

  ngOnInit() {
    this.createProdEditForm();
    this.getProdById();
    this.getAllCategory(); //
    this.getAllUnits(); //
    this.getAllKalibry(); //
    this.getAllPackege(); //
    this.getAllQuality(); //
  }

  createProdEditForm() {
    this.productEditForm = this.fb.group({
      category_id: [, [Validators.required]],
      kind_id: [, [Validators.required]],
      quality_id: [, Validators.required],
      package_id: [, Validators.required],
      kalibry_id: [, Validators.required],
      unit_id: [, Validators.required],
      common: [, Validators.required],
      price: [, Validators.required],
      accumulated_at: ['', Validators.required],
      expiry_time: ['', Validators.required],
      image: [''],
      id: [''],
      description_az: [''],
      description_en: [''],
      description_ru: ['']
    });
  }

  getProdById() {
    this.productService.getProdById(this.id).subscribe((response: Response) => {
      this.productResponse = response.responseContent;
      console.log(this.productResponse);
      this.productEditForm.patchValue({
        id: this.productResponse.id,
        category_id: this.productResponse.name.id,
        package_id: this.productResponse.package.id,
        unit_id: this.productResponse.unit.id,
        price: this.productResponse.price,
        accumulated_at: this.productResponse.accumulated_at,
        expiry_time: this.productResponse.expiry_time,
        common: this.productResponse.common,
        description_az: this.productResponse.description_az,
        description_en: this.productResponse.description_en,
        description_ru: this.productResponse.description_ru,
        kind_id: this.productResponse.kind.id,
        quality_id: this.productResponse.quality.id,
        kalibry_id: this.productResponse.kolibry.id,
        // image: this.productResponse.images[0],
      });
    });
  }


  getAllUnits() {
    this.productService.getUnits().subscribe((response: Response) => {
      this.units = response.responseContent;
      this.unitList = (this.units || []).map((r: any) => ({
        label: r.name_az,
        value: r.id
      }));
    });
  }

  getAllPackege() {
    this.productService.getPackege().subscribe((response: Response) => {
      this.packages = response.responseContent;
      this.packegeList = (this.packages || []).map((r: any) => ({
        label: r.name_az,
        value: r.id
      }));

    });
  }

  getAllKalibry() {
    this.productService.getKalibry().subscribe((response: Response) => {
      this.kalibry = response.responseContent;
      this.kalibryList = (this.kalibry || []).map((r: any) => ({
        label: r.name_az,
        value: r.id
      }));
    });
  }

  getAllQuality() {
    this.productService.getQuality().subscribe((response: Response) => {
      this.quality = response.responseContent;
      this.qualityList = (this.quality || []).map((r: any) => ({
        label: r.name_az,
        value: r.id
      }));
    });
  }

  getAllCategory() {
    this.productService.getCategory().subscribe((response: Response) => {
      this.category = response.responseContent;
      this.categoryList = (this.category || []).map((r: any) => ({
        label: r.name_az,
        value: r
      }));
      this.mapProducts();
    });
  }

  onSelectCategory(event) {
    this.products = event.value.subCategories;
    this.productList = (this.products || []).map((r: any) => ({
      label: r[`name_${this.lang}`],
      value: r.id
    }));
  }

  onSelectProduct(event) {
    this.getKindByCategory(event.value);
  }

  mapProducts() {
    this.selectCategory = this.productResponse.name.parent.id;
    // tslint:disable-next-line: triple-equals
    const prodList = this.category.filter(e => e.id == this.selectCategory);
    this.productList = (prodList[0].subCategories).map((r: any) => ({
      label: r.name_az,
      value: r.id
    }));
  }

  getKindByCategory(id) {
    const params = {
      category_id: id
    };
    this.productService.getKinByCategory(params).subscribe((response: Response) => {
      this.kinds = response.responseContent;
      this.kindList = (this.kinds || []).map((r: any) => ({
        label: r[`name_${this.lang}`],
        value: r.id
      }));
    });
  }


  onChangeLanguage(lang, i) {
    this.selectLang = i;
    this.lang = lang;
    this.packegeList = (this.packages || []).map((r: any) => ({
      label: r[`name_${lang}`],
      value: r.id
    })),

    this.qualityList = (this.quality || []).map((r: any) => ({
      label: r[`name_${lang}`],
      value: r.id
    }));

    this.unitList = (this.units || []).map((r: any) => ({
      label: r[`name_${lang}`],
      value: r.id
    }));

    this.kalibryList = (this.kalibry || []).map((r: any) => ({
      label: r[`name_${lang}`],
      value: r.id
    }));

    this.categoryList = (this.category || []).map((r: any) => ({
      label: r[`name_${lang}`],
      value: r
    }));

    this.productList = (this.products || []).map((r: any) => ({
      label: r[`name_${lang}`],
      value: r.id
    }));

    this.kindList = (this.kinds || []).map((r: any) => ({
      label: r[`name_${lang}`],
      value: r.id
    }));
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
    this.productService.updateProduct(this.productEditForm.value).subscribe( () => {
      this.router.navigate(['/dashboard/products']);
    });
  }
}
