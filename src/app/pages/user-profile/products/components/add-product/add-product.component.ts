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

  productForm: FormGroup;
  lang =  'az';
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
    this.getAllCategory(); //
    this.getAllQuality(); //
    this.getAllPackege(); //
    this.getAllKalibry(); //
    this.getAllUnits(); //
    this.createProdForm(); //
  }

  getAllUnits() {
    this.productService.getUnits().subscribe((response: Response) => {
      this.units = response.responseContent;
      this.unitList = (this.units || []).map((r: any) => ({
        label: r.name,
        value: r.id
      }));
    });
  }

  getAllPackege() {
    this.productService.getPackege().subscribe((response: Response) => {
      this.packages = response.responseContent;
      this.packegeList = (this.packages || []).map((r: any) => ({
        label: r.name,
        value: r.id
      }));

    });
  }

  getAllKalibry() {
    this.productService.getKalibry().subscribe((response: Response) => {
      this.kalibry = response.responseContent;
      this.kalibryList = (this.kalibry || []).map((r: any) => ({
        label: r.name,
        value: r.id
      }));
    });
  }

  getAllQuality() {
    this.productService.getQuality().subscribe((response: Response) => {
      this.quality = response.responseContent;
      this.qualityList = (this.quality || []).map((r: any) => ({
        label: r.name,
        value: r.id
      }));
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

  // getAllCategory() {
  //   this.productService.getCategory().subscribe((response: Response) => {
  //     this.category = response.responseContent;
  //     this.onChangeLanguage('az', 1);
  //   });
  // }


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
      category_id: id
    };
    this.productService.getKinByCategory(params).subscribe((response: Response) => {
      this.kinds = response.responseContent;
      console.log(this.kinds);
      this.kindList = (this.kinds || []).map((r: any) => ({
        label: r.name_az,
        value: r.id
      }));
    });
  }


  createProdForm() {
    this.productForm = this.fb.group({
      category_id: [ , [Validators.required]],
      kind_id:     [ , [Validators.required]],
      quality_id:  [ , Validators.required],
      package_id:  [ , Validators.required],
      kalibry_id:  [ , Validators.required],
      unit_id:     [ , Validators.required],
      common:      [ , Validators.required],
      price:       [ , Validators.required],
      accumulated_at: [ '', Validators.required],
      expiry_time:    [ '', Validators.required],
      image:          [ ''],
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
  // deletePhoto() {
  //   this.fileRaw = null;
  //   this.url = null;
  //   $('#photo').val('');
  //   console.log(this.fileRaw, this.url);
  // }


  addProduct() {
    this.productService.createProduct(this.productForm.value, this.file).subscribe( () => {
      this.router.navigate(['/dashboard/products']);
    });
  }

}
