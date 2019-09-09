import { Unit } from './unit';
import { Kinds } from './kinds';

export interface Product {

    id: number;
    name_az: string;
    name_en: string;
    name_ru: string;
    common: number;
    sell: number;
    price: string;
    description_az: string;
    description_en: string;
    description_ru: string;
    accumulated_at: string;
    expiry_time: string;
    created_at: string;
    updated_at: string;
    images: {
        id: number,
        url: string;
    };
    unit: Unit[];
    kind: Kinds[];
}
