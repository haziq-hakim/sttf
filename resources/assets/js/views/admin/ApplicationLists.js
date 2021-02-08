import * as React from "react";
import * as ReactDOM from "react-dom";
import { withStyles } from '@material-ui/core/styles';
import { Grid,  GridToolbar, GridColumn as Column ,GridDetailRow} from "@progress/kendo-react-grid";
import { CardHeader, Card } from '@material-ui/core';
import Gridlayout from '@material-ui/core/Grid';
import Paper from '@material-ui/core/Paper';
import Typography from '@material-ui/core/Typography';
import { ToastContainer, toast } from 'react-toastify';
import { filterBy } from '@progress/kendo-data-query';
import Button from '@material-ui/core/Button';
import { ExcelExport } from '@progress/kendo-react-excel-export';
import EditForm from './editForm.jsx';
import { PDFExport, savePDF ,GridPDFExport } from '@progress/kendo-react-pdf';
import EditRoundedIcon from '@material-ui/icons/EditRounded';

import RegisterForm from "../../components/forms/registerForm.jsx";

const EditCommandCell = props => {
    return (
        <td>
               <Button 
                onClick={props.editRowHandler.bind(this,props.dataItem)}> <EditRoundedIcon/>
                </Button>
        </td>
    );
};

const useStyles = theme => ({
    root: {
      flexGrow: 1,
    },
    fullpaper: {
      padding: theme.spacing(2),
      // margin: 'auto',
      // maxWidth: 200,
    },
  
  
    cardHeaderStylePref:{
      background: 'linear-gradient(to right bottom, #f07104, #f07104)',
      height: 30,
      padding: 0
    },
    title: {
       marginTop:8
    
    },
    paper: {
      textAlign: 'center',
      maxWidth: 400,
      margin: `${theme.spacing(1)}px auto`,
      padding: theme.spacing(2),
    }, 
  

  
  });

  class DetailComponent extends GridDetailRow {

    export = () => {
        this._export.save();
    }

    render() {
        const dataItem = this.props.dataItem;
        if(dataItem.CHECK_LISTS.length > 0){
        return (
            <section>
                 {/* {dataItem.CHECK_LISTS .map((val) => (
              
              <p><strong> {val.CHECKLIST_INFO} : </strong> {val.CHECKLIST_MARK}</p>
               
                 ))} */}



                     <Gridlayout  container  className={"m-t-20"}>
                         <Gridlayout  item >
                           <ExcelExport data={dataItem.CHECK_LISTS} ref={exporter => this._export = exporter} >
                         <Grid style={{ height: "500px" }} 
                         data={dataItem.CHECK_LISTS} 
                > 
                          <GridToolbar>
                                 <button
                                     title="Export Excel"
                                     className="k-button k-primary"
                                     onClick={this.export}
                                 >
                                     Export to Excel
                             </button>
                           
                             </GridToolbar>
                             <Column field="CHECKLIST_INFO" title="CHECKLIST INFO" width="1000px" />
                             <Column field="CHECKLIST_MARK" title="CHECKLIST MARK" width="250px" />
                           
                         </Grid>
                           </ExcelExport>
                </Gridlayout>
             </Gridlayout>
            </section>
        );
         } 
         else {
        return (<section> NO RECORD FOUND</section> );

                 }

    }
}



class ApplicationLists extends React.Component {
    constructor(props) {
        super(props);
        this.state  = {
        openForm: false,
        filter: undefined,
        editItem: {},
        data: [],
        dataRef:[],
        isFormShow :false,
        exporting: false
    }
}


componentDidMount () {

   if(this.props.App_ID > 0){
    axios.get('/api/getClientById/'+this.props.App_ID).then(response => {
        this.setState({
          data: response.data,
          dataRef:response.data,
          take: 10,
          skip:0
        })
      })
   }
     else{
    axios.get('/api/getClientDetails').then(response => {
      this.setState({
        data: response.data,
        dataRef:response.data,
        take: 10,
        skip:0
      })
    })
}
  }

  

  export = () => {
    this._export.save();
}

pdfExportDone = () => {
    this.setState({ exporting: false });
}

exportPDF = () => {
    this.gridPDFExport.save(this.state.data, this.pdfExportDone);

    this.setState({ exporting: true });
}

    enterEdit = item => {
        this.setState({
            openForm: true,
            editItem: item
        });
    }

    handleSubmit = (event) => {
        this.setState({
            data: this.state.data.map(item => {
                if (event.ProductID === item.ProductID) {
                    item = { ...event };
                }
                return item;
            }),
            openForm: false
        });
    }

    filterChange = (event) => {
        this.setState({
            data: filterBy(this.state.dataRef , event.filter),
            filter: event.filter
        });
    }

    handleCancelEdit = () => {
        this.setState({ openForm: false })
    }

    MyEditCommandCell = props => (
        <EditCommandCell {...props}  editRowHandler={this.props.editRowHandler}  enterEdit={this.enterEdit} />
    );

    expandChange = (event) => {
        event.dataItem.expanded = !event.dataItem.expanded;
        this.forceUpdate();
    }

    displayAllRecords=()=>{
        axios.get('/api/getClientDetails').then(response => {
            this.setState({
              data: response.data,
              dataRef:response.data,
              take: 10,
              skip:0
            })
          })

    }

    handleDialogOpen = () => {
      this.setState({
        isFormShow :true})
      }

      onHide=()=>{
        this.setState({
          isFormShow :false})
      }
     
      doneSubmit=(data)=>{
        this.setState({
          data :data,
          isFormShow:false})
        }
      

      
    
    render() {
        const {classes} = this.props;

       const grid =( <Grid style={{ height: "1000px" }} 
                    data={this.state.data} 
                    filterable={true} 
                    filter={this.state.filter} 
                    onFilterChange={this.filterChange}
                    skip={this.state.skip}
                    take={this.state.take}
                    total={this.state.dataRef.length}
                    pageable={true}
                    detail={DetailComponent}
                    expandField="expanded"
                    onExpandChange={this.expandChange}> 
                    <GridToolbar>
                            <button
                                title="Export Excel"
                                className="k-button k-primary"
                                onClick={this.export}
                            >
                                Export to Excel
                        </button>
                        <button
                            title="Export PDF"
                            className="k-button k-primary"
                            onClick={this.exportPDF}
                            disabled={this.state.exporting}
                        > Export PDF</button>

                        <button
                        title="Display All Records"
                        className="k-button k-primary"
                        onClick={this.displayAllRecords}
                        >
                        Display All Records
                        </button>
                        <button
                        title="Add Customer"
                        className="k-button k-primary"
                        onClick={() => this.handleDialogOpen()}
                        >
                        Add New Customer
                        </button>
                       
                        </GridToolbar>
                        <Column field="REF_NO" title="REF_NO" width="250px" />
                        <Column field="CUST_NAME" title="Customers Name" width="250px" />
                        <Column field="BRANCH_NAME" title="Branch Name" />
                        <Column field="CUST_SECTOR" title="Sector" />
                        <Column field="CUST_PERSON_NAME" title="Person Incharge" />
                        <Column cell={this.MyEditCommandCell}  title="Action" />
                    </Grid>
                    )

        return (
 <React.Fragment>
 <div className="flex flex-wrap mt-4">
      <div className="w-full mb-12 px-4">
      </div>
      <div className="w-full mb-12 px-4">
     </div>
     </div>
      <div className={classes.root}>
    <Card className={classes.root}> 
              <ToastContainer />
              <CardHeader className={classes.cardHeaderStylePref}
                    title={
                      <Typography className={classes.title} gutterBottom variant="h5" component="h2" style={{color: 'white'}}>
                         APPLICATION LISTS
                      </Typography>
                   } 
              ></CardHeader>
      <Gridlayout  container  className={"m-t-20"}>
                 
        <Gridlayout  item >
                  <ExcelExport data={this.state.data} ref={exporter => this._export = exporter} >
              {grid}
                {this.state.openForm && <EditForm cancelEdit={this.handleCancelEdit} onSubmit={this.handleSubmit} 
                item={this.state.editItem} />}
                  </ExcelExport>
                  <GridPDFExport
                    ref={pdfExport => this.gridPDFExport = pdfExport}
                >
                    {grid}
                </GridPDFExport>

       </Gridlayout>
    </Gridlayout>
   </Card>
   <RegisterForm  doneSubmit={this.doneSubmit} onHide={this.onHide}  form={this.state.isFormShow} />
  </div>
          </React.Fragment>
        );
    }
}


export default withStyles(useStyles)(ApplicationLists)