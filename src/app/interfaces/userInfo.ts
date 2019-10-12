export interface UserInfo {

    address: string;
    avatar: string;
    bank_account: string;
    contacts: [
        {
            contact: string;
            id: number;
            type: number;
        }
    ];
    created_at: string;
    description_az: string;
    description_en: string;
    description_ru: string;
    description: string;
    id: number;
    is_company: number;
    name: string;
    role: number;
    username: string;
    voen: string;
    website: string;
}
