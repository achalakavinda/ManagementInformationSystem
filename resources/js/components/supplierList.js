import React, {useEffect, useState} from 'react';
import ReactDOM from 'react-dom';
import ReactHTMLTableToExcel from 'react-html-table-to-excel';
import Paginator from "./common/paginator";
import BrandModal from "./common/modals/brand-modal";

const ItemCodeTable = (props) => {

    const pageData = props.props;
    const [tableData, setTableData] = useState([{id:1}]);
    const [loading, setLoading] = useState(true);

    const [sortFields, setSortFields] = useState('');
    const [sortOrder, setSortOrder] = useState('ASC');
    const [searchText, setSearchText] = useState("");

    const [perPage, setPerPage] = useState(10);
    const [currentPage, setCurrentPage] = useState(1);
    const [pagination, setPagination] = useState({});

    //set column states
    const [itemNameSorted, setItemNameSorted] = useState(false);
    const [brandSorted, setBrandSorted] = useState(false);
    const [categorySorted,setCategorySorted] = useState(false);
    const [colorSorted,setColorSorted] = useState(false);
    const [sizeSorted,setSizeSorted] = useState(false);
    const [unitCostSorted,setUnitCostSorted] = useState(false);
    const [sellingPriceSorted,setSellingPriceSorted] = useState(false);
    const [marketPriceSorted,setMarketPriceSorted] = useState(false);
    const [mixPriceSorted,setMixPriceSorted] = useState(false);
    const [maxPriceSorted,setMaxPriceSorted] = useState(false);
    const [unitPriceWithTexsSorted,setUnitPriceWithTexsSorted] = useState(false);
    const [inStockSorted,setInStockSorted] = useState(false);

    const [modalShow, setModalShow] = React.useState(false);

    const buildSortQueryPram = () => {
        let str = [];
        if(itemNameSorted)
            str.push(['item_name']);
        if(brandSorted)
            str.push(['brand_name']);
        if(categorySorted)
            str.push(['category_name']);
        if(colorSorted)
            str.push(['color_name']);
        if(sizeSorted)
            str.push(['size_name']);
        if(unitCostSorted)
            str.push(['unit_cost']);
        if(sellingPriceSorted)
            str.push(['selling_price']);
        if(maxPriceSorted)
            str.push(['max_price']);
        if(mixPriceSorted)
            str.push(['min_price']);
        if(unitPriceWithTexsSorted)
            str.push(['unit_price_with_tax']);
        if(inStockSorted)
            str.push(['stock_qty']);

        str = str.join(",");
        return str;
    }



    const fetchTableData = async () => {
        const  params = {
            sort_field: sortFields,
            sort_order: sortOrder,
            per_page: perPage,
            page: currentPage,
            search_text:searchText,
            api_token: pageData.api_token
        };
        await axios.get(pageData.api_url+'/item-code',{params}).then( data => {
            if(data.data.data) {
                setTableData(data.data.data);
                setPagination(data.data.meta);
            }
            setLoading(false)
        });
    };

    useEffect(()=> {
        fetchTableData().then( data => {
            //todo write any post fetch logic here....
        });
    },[sortFields,sortOrder,perPage,currentPage,searchText]);

    useEffect(()=> {
        setSortFields(buildSortQueryPram());
    }, [
        itemNameSorted,
        brandSorted,
        categorySorted,
        colorSorted,
        sizeSorted,
        unitCostSorted,
        sellingPriceSorted,
        maxPriceSorted,
        mixPriceSorted,
        maxPriceSorted,
        unitPriceWithTexsSorted,
        inStockSorted,
        maxPriceSorted]);



    const sortFieldHandler =async (field,e,setStateHandler) => {

        const isChecked = e.target.checked;

        switch (field) {
            case 'item_name':
                setStateHandler(isChecked);
                break;
            case 'brand_name':
                setStateHandler(isChecked);
                break;
            case 'category_name':
                setStateHandler(isChecked);
                break;
            case 'color_name':
                setStateHandler(isChecked);
                break;
            case 'size_name':
                setStateHandler(isChecked);
                break;
            case 'unit_cost':
                setStateHandler(isChecked);
                break;
            case 'selling_price':
                setStateHandler(isChecked);
                break;
            case 'market_price':
                setStateHandler(isChecked);
                break;
            case 'min_price':
                setStateHandler(isChecked);
                break;
            case 'max_price':
                setStateHandler(isChecked);
                break;
            case 'unit_price_with_tax':
                setStateHandler(isChecked);
                break;
            case 'stock_qty':
                setStateHandler(isChecked);
                break;

            default:

                break;
        }
    }

    const perPageHandler = (event) => {
        setPerPage(event.target.value);
        setCurrentPage(1);
    }

    const searchTextHandler = (event) => {
        setSearchText(event.target.value);
        setCurrentPage(1);
    }

    const [columns, setColumns] = useState([
        { key:'item_name', 'title': 'Name' ,'sort':true,'onChangeHandler':sortFieldHandler, checked:itemNameSorted,setStateHandler:setItemNameSorted},
        { key:'brand_name', 'title': 'Brand','sort':true, 'onChangeHandler':sortFieldHandler, checked:brandSorted,setStateHandler:setBrandSorted},
        { key:'category_name', 'title': 'Category','sort':true, 'onChangeHandler':sortFieldHandler, checked:categorySorted,setStateHandler:setCategorySorted },
        { key:'color_name', 'title': 'Color','sort':true, 'onChangeHandler':sortFieldHandler, checked:colorSorted,setStateHandler:setColorSorted },
        { key:'size_name', 'title': 'Size','sort':true,'onChangeHandler':sortFieldHandler, checked:sizeSorted,setStateHandler:setSizeSorted },
        { key:'unit_cost', 'title': 'Unit Cost','sort':true,'onChangeHandler':sortFieldHandler, checked:unitCostSorted,setStateHandler:setUnitCostSorted },
        { key:'selling_price', 'title': 'Selling Price','sort':true,'onChangeHandler':sortFieldHandler, checked:sellingPriceSorted,setStateHandler:setSellingPriceSorted },
        { key:'market_price', 'title': 'Market Price','sort':true,'onChangeHandler':sortFieldHandler, checked:marketPriceSorted,setStateHandler:setMarketPriceSorted },
        { key:'min_price', 'title': 'Min Price','sort':true,'onChangeHandler':sortFieldHandler, checked:mixPriceSorted,setStateHandler:setMixPriceSorted },
        { key:'max_price', 'title': 'Max Price','sort':true,'onChangeHandler':sortFieldHandler, checked:maxPriceSorted,setStateHandler:setMaxPriceSorted },
        { key:'nbt_tax_percentage', 'title': 'NBT%','sort':false,'onChangeHandler':sortFieldHandler, checked:false,setStateHandler:null },
        { key:'vat_tax_percentage', 'title': 'VAT%','sort':false,'onChangeHandler':sortFieldHandler, checked:false,setStateHandler:null },
        { key:'unit_price_with_tax', 'title': 'Unit Price With Taxes','sort':true,'onChangeHandler':sortFieldHandler, checked:unitPriceWithTexsSorted,setStateHandler:setUnitPriceWithTexsSorted },
        { key:'stock_qty', 'title': 'In Stock','sort':true,'onChangeHandler':sortFieldHandler, checked:inStockSorted,setStateHandler:setInStockSorted },
    ]);

    return (

        <div>

            <div className="col-md-2">
                <div className="form-group row">
                    <label className="col-sm-4 col-form-label">Rows</label>
                    <div className="col-sm-8">
                        <select className="form-control" value={perPage} onChange={perPageHandler}>
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="50">50</option>
                            <option value="1000">100+</option>
                        </select>
                    </div>
                </div>
            </div>

            <div className="col-md-4">
                <div className="form-group row">
                    <label className="col-sm-2 col-form-label">Search</label>
                    <div className="col-sm-8">
                        <input type="text" className="form-control" value={searchText} onChange={searchTextHandler}/>
                    </div>
                </div>
            </div>

            <ReactHTMLTableToExcel
                id="test-table-xls-button"
                className="download-table-xls-button"
                table="table-to-xls"
                filename="Items"
                sheet="items"
                buttonText="Download as XLS"/>

            <table id="table-to-xls" className="table table-responsive table-bordered table-striped">
                <thead>
                    <tr>
                        {columns.map((column,index)=>{
                            return (
                                <th key={column.key}>
                                    {column.sort?(
                                        <input defaultChecked={column.checked} type="checkbox" onClick={ (e) => { sortFieldHandler(column.key,e,column.setStateHandler); }}/>
                                    ):''}
                                    <span> {column.title} {column.sort?(<i className="fa fa-sort"></i>):''}</span>
                                </th>
                            );
                        })}
                        <th > view</th>
                    </tr>
                </thead>
                <tbody>
                    { loading? (
                        <tr>
                            <td colSpan={16} className="text-center">Loading data.....</td>
                        </tr>
                    ) : (
                        tableData.map((data, index) => {
                            return (
                                <tr key={index}>
                                    {columns.map((column,index)=>{
                                        return (
                                            <td key={column.key}>{data[column.key]}</td>
                                        ) })}
                                    <td>
                                        <a href={ pageData.base_url+'/ims/item/'+data.id } ><i className="fa fa-paper-plane"></i></a>
                                    </td>
                                </tr>
                            )
                        })
                    ) }

                </tbody>
            </table>

            { !loading && tableData.length>0? (<Paginator pagination={pagination} pageChanged={ (page)=> setCurrentPage(page) }/>):null }

            <BrandModal props={modalShow} />

        </div>
    );
};

export default ItemCodeTable;

if (document.getElementById('itemCodeList')) {
    ReactDOM.render(
            <ItemCodeTable props={ window.pageDate }/>,
        document.getElementById('itemCodeList'));
}
