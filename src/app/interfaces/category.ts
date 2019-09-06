export interface Category {
    id: number;
    name_en: string;
    name_ru: string;
    name_az: string;
    subCategories: [
        {
            id: number;
            parent_id: number,
            name_en: string;
            name_ru: string;
            name_az: string;
            status: number;
        },
    ]
}
