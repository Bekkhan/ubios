<template>
    <div>
        <default-loader
            v-if="loading"/>
        <div v-else class="block_add_equipments">
            <page-header-title
                :title="'Добавление оборудования'"
                :line = true
                :backHref = "'/equipment'"
                :isForm = true>
            </page-header-title>
            <div class="white_block_forms_shadow">
                <div class="row row_block_add_equipments">
                    <div class="col_block_add_equipments">
                        <label for="branch_id">Подразделение <span class="alert-char">*</span></label><br>
                        <select-area name="branch_id"
                                     id="branch_id"
                                     v-model="equipment.branch_id"
                                     :options="branches"
                                     :error="$v.equipment.branch_id.$dirty && !$v.equipment.branch_id.required"
                        >
                        </select-area>
                        <div class="error-field">
              <span v-if="$v.equipment.branch_id.$dirty && !$v.equipment.branch_id.required">
                Подразделение - обязательное поле
              </span>
                        </div>
                    </div>
                </div>
                <div class="row row_block_add_equipments">
                    <div class="col_block_add_equipments">
                        <label for="department_id">Отделение <span class="alert-char">*</span></label><br>
                        <select-area id="department_id"
                                     v-model="equipment.department_id"
                                     :disabled="!equipment.branch_id"
                                     :options="activeDepartments"
                                     :error="$v.equipment.department_id.$dirty && !$v.equipment.department_id.required"
                        >
                        </select-area>
                        <div class="error-field">
              <span v-if="$v.equipment.department_id.$dirty && !$v.equipment.department_id.required">
                Отделение - обязательное поле
              </span>
                        </div>
                    </div>
                </div>
                <div class="row row_block_add_equipments">
                    <div class="col_block_add_equipments nameOfCabinet">
                        <label for="cabinet_id">Название кабинета <span class="alert-char">*</span></label>
                        <select-area id="cabinet_id"
                                     name="cabinet_id"
                                     v-model="equipment.cabinet_id"
                                     :key="cabinetNumberUpdated"
                                     :disabled="!equipment.department_id"
                                     :options="activeCabinets"
                                     :error="$v.equipment.cabinet_id.$dirty && !$v.equipment.cabinet_id.required"
                                     @chose="cabinetNameUpdated++">
                        </select-area>
                        <div class="error-field">
            <span v-if="$v.equipment.cabinet_id.$dirty && !$v.equipment.cabinet_id.required">
                Название кабинета - обязательное поле
              </span>
                        </div>
                    </div>
                    <div class="col_block_add_equipments numberOfCabinet">
                        <label for="cabinet_id_num">№ кабинета</label>
                        <input type="text"
                               disabled
                               id="cabinet_id_num"
                               v-model="chosenCabinetNumber">
                    </div>
                </div>
                <div class="block_add_equipments_grey">
                    <div class="row row_block_add_equipments">
                        <div class="col_block_add_equipments">
                            <label for="title">Наименование оборудования <span class="alert-char">*</span></label><br>
                            <input class="form-control blue_border"
                                   placeholder="Наименование"
                                   :class="{
                     error: ($v.equipment.title.$dirty && !$v.equipment.title.required)}"
                                   id="title"
                                   type="text"
                                   name="title"
                                   v-model="equipment.title"
                            >
                            <div class="error-field">
              <span v-if="$v.equipment.title.$dirty && !$v.equipment.title.required">
                Наименование оборудования - обязательное поле
              </span>
                                <span v-else-if="$v.equipment.title.$dirty && !$v.equipment.title.minLength">
                Минимальная длина - {{ $v.title.$params.minLength.min }}
              </span>
                            </div>
                        </div>
                    </div>
                    <div class="row row_block_add_equipments">
                        <div class="col_block_add_equipments">
                            <label for="short_title">Краткое наименование </label><br>
                            <input class="form-control blue_border"
                                   placeholder="Краткое наименование"
                                   id="short_title"
                                   type="text"
                                   name="short_title"
                                   v-model="equipment.short_title"
                            >
                        </div>
                    </div>
                    <div class="row d-flex justify-content-between row_block_add_equipments">
                        <div class="col_eq">
                            <label for="type_id">Тип оборудования <span class="alert-char">*</span></label>
                            <select-area id="type_id"
                                         name="type_id"
                                         v-model="equipment.type_id"
                                         :error="$v.equipment.type_id.$dirty && !$v.equipment.type_id.required"
                                         :options="equipmentTypesWithCompositionName"
                                         @change="changeEquipmentType"
                            >
                            </select-area>
                            <div class="error-field">
            <span v-if="$v.equipment.type_id.$dirty && !$v.equipment.type_id.required">
                Тип оборудования - обязательное поле
              </span>
                            </div>
                        </div>
                        <div class="col_eq">
                            <label for="digitalization_type_id">Тип сигнала <span class="alert-char">*</span></label>
                            <select-area id="digitalization_type_id"
                                         name="digitalization_type_id"
                                         v-model="equipment.digitalization_type_id"
                                         :error="$v.equipment.digitalization_type_id.$dirty && !$v.equipment.digitalization_type_id.required"
                                         :options="digitalizations">
                            </select-area>
                            <div class="error-field">
            <span v-if="$v.equipment.digitalization_type_id.$dirty && !$v.equipment.digitalization_type_id.required">
                Тип сигнала - обязательное поле
              </span>
                            </div>
                        </div>


                    </div>

                    <div class="row row_block_add_equipments">
                        <div class="col_block_add_equipments">
                            <label for="equipment_standard">Тип по стандарту оснащения <span class="alert-char">*</span></label><br>
                            <autocomplete-input-basic
                                :search="searchEquipmentStandard"
                                :getResultValue="getEquipmentStandardValue"
                                @submit="selectEquipmentStandard"
                                @clear="clearEquipmentStandard"
                                :debounce-time="500"
                                :minInput="0"
                                :error="this.$v.equipment.equipment_standard.$dirty && !this.$v.equipment.equipment_standard.required"
                                auto-select
                                id="equipment_standard"
                                ref="equipment_standard"
                                v-model="equipment.equipment_standard"
                                :item="equipment.equipment_standard"
                                placeholder="Выбрать"
                                aria-label="Тип по стандарту оснащения">
                            </autocomplete-input-basic>
                            <div class="error-field">
              <span v-if="this.$v.equipment.equipment_standard.$dirty && !this.$v.equipment.equipment_standard.required">
                Тип по стандарту оснащения - обязательное поле
              </span>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-between row_block_add_equipments">

                        <div class="col_eq">
                            <label for="optional_equipment">Дополнительное оборудование</label>
                            <select-area id="optional_equipment"
                                         name="type_id"
                                         v-model="optional_equipment"
                                         :error="$v.equipment.type_id.$dirty && !$v.equipment.type_id.required"
                                         :options="equipmentTypes">
                            </select-area>
                            <div class="error-field">
            <span v-if="$v.equipment.type_id.$dirty && !$v.equipment.type_id.required">
                Это обязательное поле
              </span>
                            </div>
                        </div>
                        <div class="col_eq d-flex blue_checkbox" style="margin-top: 34px;">
                            <div class="checkbox_input_blue__white" style="margin-right: 12px">
                                <input type="checkbox"
                                       v-model="equipment.doses_control">
                            </div>
                            <span style="color: #86949E;margin-top: -3px;">Контроль и учёт индивидуальных доз</span>
                        </div>
                    </div>
                </div>
                <div class="row row_block_add_equipments" style="margin-top: 24px">
                    <div class="col_1">
                        <label for="aet">AET</label><br>
                        <input class="form-control blue_border"
                               id="aet"
                               :class="{
                     error: ($v.equipment.aet.$dirty && !$v.equipment.aet.minLength)}"
                               type="text"
                               name="aet"
                               v-model="equipment.aet">
                        <div class="error-field">
              <span v-if="$v.equipment.aet.$dirty && !$v.equipment.aet.minLength">
                Минимальная длинна - {{ $v.equipment.aet.$params.minLength.min }}
              </span>
                        </div>
                    </div>
                    <div class="col_2_3">
                        <label for="fqdn">FQDN</label>
                        <input class="form-control blue_border"
                               id="fqdn"
                               type="text"
                               name="fqdn"
                               v-model="equipment.fqdn">
                    </div>
                    <div class="col_2_3">
                        <label for="ip">IP</label>
                        <input class="form-control blue_border"
                               placeholder="__.__.__.__"
                               id="ip"
                               :class="{
                     error: ($v.equipment.ip.$dirty && !$v.equipment.ip.ipReg)}"
                               type="text"
                               name="ip"
                               v-model="equipment.ip">
                        <div class="error-field">
                            <span v-if="$v.equipment.ip.$dirty && !$v.equipment.ip.ipReg">Неверный формат</span>
                        </div>
                    </div>
                </div>
                <div class="row row_block_add_equipments">
                    <div class="col_1">
                        <label for="port">Port</label>
                        <input class="form-control blue_border"
                               id="port"
                               type="text"
                               name="port"
                               v-model="equipment.port">
                        <span class="error-field">

            </span>
                    </div>
                    <div class="col_2_3">
                        <label for="inventory_number">Инвентарный номер</label>
                        <input class="form-control blue_border"
                               id="inventory_number"
                               type="text"
                               name="port"
                               v-model="equipment.inventory_number">
                        <span class="error-field">

            </span>
                    </div>
                    <div class="col_2_3">
                        <label for="serial_number">Серийный номер</label>
                        <input class="form-control blue_border"
                               id="serial_number"
                               type="text"
                               name="port"
                               v-model="equipment.serial_number">
                        <span class="error-field">
            </span>
                    </div>
                </div>
                <div class="row row_block_add_equipments">
                    <div class="col_1">
                        <label for="commissioningDate">Ввод в эксплуатацию <span class="alert-char">*</span></label><br>
                        <input required class="form-control blue_border"
                               id="commissioningDate"
                               :class="{
                     error: ($v.equipment.commissioning_date.$dirty && !$v.equipment.commissioning_date.required)}"
                               type="date"
                               max="9999-12-31"
                               name="commissioning_date"
                               v-model="equipment.commissioning_date">
                        <span class="error-field">
              <span v-if="$v.equipment.commissioning_date.$dirty && !$v.equipment.commissioning_date.required">
                Ввод в эксплуатацию - обязательное поле
              </span>
            </span>
                    </div>

                    <div class="col_2_3">
                        <label for="productionDate">Дата производства</label><br>
                        <input class="form-control blue_border"
                               id="productionDate"
                               type="date"
                               max="9999-12-31"
                               name="production_date"
                               v-model="equipment.production_date">
                    </div>
                </div>
                <!--        Таблица с услугами-->

                <hr style="width: 778px">
                <div class="row row_block_add_equipments">
                    <p class="p_services" for="services">Услуги</p>
                    <table id="services" class="table_different_color_rows table">
                        <thead>
                        <tr>
                            <th style="width: 30%"
                                @click="changeSort('type_title')">Тип оборудования
                                <img class="th_filter_img"
                                     v-if="sortColumn == 'type_title'"
                                     :class="{th_filtered_img : sortDirection == 'desc'}"
                                     src="/images/icons/chevron-down-blue.svg" alt="">
                                <img class="th_filter_img"
                                     v-else
                                     src="/images/icons/menu-down-blue.svg" alt="sort">
                            </th>
                            <th style="width: 65%" @click="changeSort('title')">Наименование
                                <img class="th_filter_img"
                                     v-if="sortColumn == 'title'"
                                     :class="{th_filtered_img : sortDirection == 'desc'}"
                                     src="/images/icons/chevron-down-blue.svg" alt="">
                                <img class="th_filter_img"
                                     v-else
                                     src="/images/icons/menu-down-blue.svg" alt="sort">
                            </th>
                            <th style="width: 5%"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="service_row" v-for="service of sortedServiceList">
                            <td>{{service.type_title}}</td>
                            <td>{{service.title}}</td>
                            <td>
                                <div class="service_delete" @click="deleteService(service)">
                                    <img src="/images/icons/close.svg" alt="x">
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div v-if="showServiceForm" class="row row_block_add_equipments">
                    <div style="width: 30%">
                        <select-area id="type_id_for_service"
                                     name="equipment_type_for_service"
                                     :default="equipment_type_for_service"
                                     v-model="equipment_type_for_service"
                                     :options="equipmentTypes">
                        </select-area>
                    </div>
                    <div style="width: 65%; margin-left: 5%">
                        <autocomplete-input-basic
                            :search="searchMedicalService"
                            placeholder="Выбрать исследование"
                            aria-label="Выбрать регион"
                            :getResultValue="getMedicalServiceValue"
                            @submit="selectMedicalService"
                            @clear="clearService"
                            :debounce-time="500"
                            :minInput="0"
                            auto-select
                            ref="serviceTitle"
                            :item="choseService">
                        </autocomplete-input-basic>
                    </div>
                </div>
                <div class="row row_block_add_equipments">
                    <transparent-button-blue-border
                        title="Добавить услугу"
                        :disabled="this.$v.$dirty && this.$v.$invalid"
                        @click="addService">
                    </transparent-button-blue-border>
                </div>
                <div class="row all_btn">
                    <div>
                        <button-back
                            :backHref = "'/equipment'">
                        </button-back>
                    </div>
                    <div>
                        <button-blue
                            @click="createEquipment"
                            :title="'Сохранить'"
                            :icon="'/images/icons/button/save.svg'"
                            :iconLocation="'left'">
                        </button-blue>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-backdrop" v-if="success_message == true">
            <div class="block_successfully_added_closed" :class="{'block_successfully_added_open': success_message}">
                <div class="block_successfully_added__X" @click="backBlockEquipmentPage">
                    <img src="/images/icons/bark_x.svg" alt="x">
                </div>
                <img class="block_successfully_added__img" src="/images/successfully/successfully__editing_equipment.svg" alt="successfullyCreated">
                <p class="block_successfully_added__text">Новое оборудование успешно создано!</p>
                <div class="block_successfully_added__btn" @click="backBlockEquipmentPage">ок</div>
            </div>
        </div>
    </div>
</template>

<script>
import {required, minLength, maxLength, between} from 'vuelidate/lib/validators'
import rules from "../../utils/rules";
import scrollToError from '../../mixins/scrollToError.mixin'


export default {
    name: "EquipmentCreate.vue",
    mixins: [scrollToError],
    data() {
        return {
            loading: false,
            showServiceForm: false,
            serviceKey: 1,
            equipmentStandardKey: 1,
            openChangeTopLevelWindow: false,
            services: [],
            equipmentStandards: [],
            choseService: null,
            choseEquipmentStandard: null,
            equipment_type_for_service: '',
            sortColumn: 'title',
            sortDirection: 'asc',
            cabinetNameUpdated: 0,
            success_message: false,
            optional_equipment: '',
            cabinetNumberUpdated: 0,
            equipment: {
                branch_id: null,
                department_id: null,
                title: "",
                short_title: "",
                aet: "",
                fqdn: "",
                ip: "",
                port: null,
                commissioning_date: null,
                production_date: null,
                decommissioning_date: null,
                type_id: null,
                equipment_standard: null,
                digitalization_type_id: null,
                cabinet_id: null,
                doses_control: false
            },
            branches: [],
            departments: [],
            digitalizations: [],
            equipmentTypes: [],
            cabinets: [],

        }
    },
    computed: {
        sortedServiceList(){
            if(!this.sortColumn) return this.services;
            if(this.sortColumn == 'type_title'){
                return  _.orderBy(this.services, this.sortColumn,
                    this.sortDirection);
            }
            if(this.sortColumn == 'title'){
                return  _.orderBy(this.services, this.sortColumn,
                    this.sortDirection);
            }
        },
        servicesKeys: function() {
            let arrayId = [];
            this.services.forEach(function (item) {
                arrayId.push(item.id);
            });
            return arrayId;
        },

        equipmentStandardKeys: function() {
            let arrayId = [];
            this.equipmentStandards.forEach(function (item) {
                arrayId.push(item.id);
            });
            return arrayId;
        },
        activeDepartments: function () {
            let departments = this.departments.filter(department => department.branch_id === this.equipment.branch_id);
            if (departments.length === 1) {
                this.equipment.department_id = departments[0].id
            } else {
                this.equipment.department_id = null
            }
            return departments
        },
        activeCabinets: function () {
            let cabinets = this.cabinets.filter(cabinet => cabinet.department_id === this.equipment.department_id)
            if (cabinets.length === 1) {
                this.equipment.cabinet_id = cabinets[0].id
            } else {
                this.equipment.cabinet_id = null
            }
            return cabinets
        },
        chosenCabinetNumber() {
            let item = null;
            if (this.activeCabinets) {
                item = this.activeCabinets.find(i => i.id === this.equipment.cabinet_id)
            }
            return item ? item.number : null;
        },
        chosenCabinetName() {
            let item = null;
            if (this.activeCabinets) {
                item = this.activeCabinets.find((i, index) => i.id === this.equipment.cabinet_id)
            }
            return item ? item.title : null;
        },
        equipmentTypesWithCompositionName() {
            return this.equipmentTypes.map(equipmentType => {
                equipmentType.title = equipmentType.eng_short_title + ' - ' + equipmentType.rus_short_title
                return equipmentType
            })
        },
    },
    validations: {
        equipment: {
            branch_id: {required},
            department_id: {required},
            cabinet_id: {required},
            equipment_standard: {required},
            title: {required, minLength: minLength(3)},
            type_id: {required},
            digitalization_type_id: {required},
            aet: {minLength: minLength(3)},
            ip: {ipReg: rules['ipReg']},
            port: {between: between(0, 65535)},
            commissioning_date: {required},
        },
    },
    mounted() {
        this.getSelectors();
        this.$root.$emit('setPageTitle', 'Управление оборудованием');
        this.$root.$emit('setPageImage', '/images/menu_logo/equipment_icon.svg');
    },

    methods: {
        changeEquipmentType() {
            this.equipment_type_for_service = this.equipment.type_id
        },
        changeSort(column){
            this.sortColumn = column;
            if(this.sortDirection == 'acs'){
                this.sortDirection = 'desc'
            } else {
                this.sortDirection = 'acs'
            }
        },
        setSort(sortBy) {
            if (this.sortBy === sortBy) {
                this.sortOrder[sortBy] = !this.sortOrder[sortBy]

            }
            Object.keys(this.sortOrder).map(item => {
                if (item !== sortBy) {
                    this.sortOrder[item] = true;
                }
            });
            let sortOrder = null;
            if (!this.sortOrder[sortBy]) {
                sortOrder = 'desc'
            }
            let sortingOptions = {
                sortBy,
                sortOrder
            }
        },
        // autocomplete тип оснащение
        searchEquipmentStandard(input) {
            return new Promise(resolve => {
                let url = `/api/equipment/standard/get-list-for-selector?title=${input}`
                fetch(url)
                    .then(response => response.json())
                    .then(data => {
                        let keys = this.equipmentStandardKeys;
                        let responseData = _.filter(data.equipmentStandardList, function (item) {
                            return  keys.indexOf(item.id) === -1
                        })
                        resolve(responseData)
                    })
            })
        },
        getEquipmentStandardValue(result) {
            return result.title;
        },
        selectEquipmentStandard(equipmentStandard) {
            this.equipment.equipment_standard = equipmentStandard.id;
        },

        clearEquipmentStandard() {
            this.choseEquipmentStandard = null;
            this.equipment.equipment_standard = null;
            this.equipmentStandardKey ++;
        },

        searchMedicalService(input) {
            return new Promise(resolve => {
                let url = `/medical-services/list?title=${input}&equipment_type=${this.equipment_type_for_service}`
                fetch(url)
                    .then(response => response.json())
                    .then(data => {
                        let keys = this.servicesKeys;
                        let responseData = _.filter(data.serviceList, function (item) {
                            return  keys.indexOf(item.id) === -1
                        })
                        resolve(responseData)
                    })
            })
        },
        getMedicalServiceValue(result) {
            return result.title;
        },
        addService() {
            this.showServiceForm = true;
            if (this.choseService !== null) {
                this.services.push(this.choseService);
                this.clearService();
                this.$refs.serviceTitle.clearAll()
            }
        },
        deleteService(service) {
            var index = this.services.indexOf(service);
            if (index > -1) {
                this.services.splice(index, 1);
            }
        },
        selectMedicalService(service) {
            this.choseService = service;
            this.equipment_type_for_service = service.equipment_type;
        },
        clearService() {
            this.choseService = null;
            this.serviceKey ++;
        },
        async getSelectors() {
            this.loading = true;
            await this.getCabinetSelector();
            await this.getEquipmentTypeSelector();
            await this.getDigitalizationTypeSelector();
            await this.getBranches();
            await this.getDepartments();
            this.loading = false;
        },
        async getCabinetSelector() {
            await axios
                .get('/api/equipment/get-cabinets')
                .then((response) => {
                    this.cabinets = response.data
                })
        },
        async getDigitalizationTypeSelector() {
            await axios
                .get('/api/equipment/get-digitalization-type')
                .then((response) => {
                    this.digitalizations = response.data
                })
        },
        async getEquipmentTypeSelector() {
            await axios
                .get('/api/equipment/get-equipment-type')
                .then((response) => {
                    this.equipmentTypes = response.data
                })
        },
        async getBranches() {
            await axios
                .get('/api/institution/branches/get-list-for-selector')
                .then((response) => {
                    this.branches = response.data.branchList
                    if (this.branches.length === 1) {
                        this.equipment.branch_id = this.branches[0].id
                    }
                })
        },
        async getDepartments() {
            await axios
                .get('/api/institution/departments/get-list-for-selector')
                .then((response) => {
                    this.departments = response.data.departments
                })
        },
        createEquipment() {
            this.$v.$touch()
            if (this.$v.$invalid) {
                this.scrollOnErrorFront("equipment");
                return
            }
            if (this.choseService !== null) {
                this.addService();
            }
            this.equipment.services_id = this.servicesKeys
            axios
                .post('/api/equipment/create', this.equipment)
                .then((response) => {
                    if (response.data.result) {
                        setTimeout(() => {
                            this.success_message = true
                        }, 50);
                        setTimeout(this.backBlockEquipmentPage, 4000);
                    }

                }).catch((error) => {
                if (error.response.status === 422)
                    this.errors = error.response.data.errors
            })
        },
        backBlockEquipmentPage() {
            window.location.pathname = "/equipment"
        },
    },



}
</script>

<style lang="scss" scoped>
.services_table {
    width: 100%;
}
.service_delete {
    display: none;
}
.service_row {
    border-top: 1px solid #E5E5E5;
    height: 45px;
    font-size: 14px;
    line-height: 18px;
    color: #1C2530;
}
.service_row:hover {
    .service_delete {
        display: block;
    }
}

.deleteService {
    width: 760px;
    text-align: right;
    margin-left: -746px;
    position: absolute;
    height: 14px;
    margin-bottom: 10px;
}
.deleteService :hover {
    display: none;
}
.services_table th {
    color: #355BAF;
}
.col_1 {
    width: 177px;
}
.col_2_3{
    width: 254px;
    margin-left: 42px;
}
.btn_cancel {
    display: inline-block;
    text-decoration: none;
}
.p_services{
    font-weight: 500;
    font-size: 18px;
    line-height: 22px;
    margin: 42px 0 31px 0;
    color: #1C2530;
}
hr{
    margin-bottom: 0!important;
}
.white_block_forms_shadow {
    width: 920px;
    position: relative;
}

.block_page_title {
    width: 920px;
}

.text_title_block_add_equipments {
    font-family: Roboto, sans-serif;
    font-style: normal;
    font-weight: 500;
    font-size: 24px;
    line-height: 28px;
    text-align: center;
    color: #303F51;
}

.col_block_add_equipments {
    width: 100%;
}

.btn_save_branch {
    width: 264px;
    background: #175EC9;
    display: flex;
    justify-content: center;
    padding: 12px 0;
    text-transform: uppercase;
    font-size: 14px;
    color: white;
    border-radius: 4px;
    transition: all .3s;
    cursor: pointer;

    &:hover {
        background: #326ec9;
    }

    img {
        margin-right: 4px;
    }
}

.col_eq {
    width: 374px;
}

.nameOfCabinet {
    width: 588px;
    margin-right: 15px;
}

.numberOfCabinet {
    width: 159px;
}

.row_block_add_equipments {
    margin-bottom: 32px;
}

.block_add_equipments_grey {
    background: #F3F3F3;
    padding: 24px 78px 24px 78px;
    margin: 0 -78px;
}

.signsDigital {
    width: 298px;
}

.typeEquipment {
    margin-left: 12px;
    width: 298px;
}

.equipments_layer_switch {
    display: flex;
    justify-content: center;
    margin-bottom: 24px;
}

.aet_port {
    width: 243px;
}

.FQDN_commissioningDate {
    width: 243px;
    margin-left: 16px;
    margin-right: 16px;
}

.all_btn {
    margin: 20px auto 40px auto;
    width: 400px;
    display: flex;
    justify-content: space-between;
}

.btn-back-bottom {
    margin-top: 13px;
}

.white_block_forms_shadow {
    padding: 40px 78px 16px 78px !important;
}


</style>
