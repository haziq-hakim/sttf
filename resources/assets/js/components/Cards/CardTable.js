import React, { Component} from "react";
import Paper from '@material-ui/core/Paper';
import Grid from '@material-ui/core/Grid';
import { withStyles } from '@material-ui/core/styles';
import PropTypes from "prop-types";
import TableRow from '@material-ui/core/TableRow';

// input components

import TextFields from  "../TextFields/TextField.js"
import RadioBtn from '../RadioBtn/RadioBtn.js';
import Button from '@material-ui/core/Button';
import ConfirmDialog from '../Dialog/ConfirmDialog.js';


// components

//table components
import TableCell from '@material-ui/core/TableCell';
import InputLabel from '@material-ui/core/InputLabel';
import MenuItem from '@material-ui/core/MenuItem';
import FormControl from '@material-ui/core/FormControl';
import Select from '@material-ui/core/Select';
import { divide } from "lodash";
import { ToastContainer, toast } from 'react-toastify';

//table components


const useStyles = theme => ({
  root: {
    flexGrow: 1,
  },
  table: {
    minWidth: 1350,
  },
  paper: {
    maxWidth: 400,
    textAlign: 'center',
    margin: `${theme.spacing(1)}px auto`,
    padding: theme.spacing(2),
  }, 

  button: {
    display: 'block',
    marginTop: theme.spacing(2),
  },
  formControl: {
    margin: theme.spacing(1),
    minWidth: 120,
  },
});




// const [open, setOpen] = React.useState(false);

class CardTable extends Component {
  constructor(props) {
    super(props);

    this.state = {
      check_mark : [], // use to submit result checklist
      checkLists: [], //use for listing cheklist 
      clientDetails:[], //use for listing dropdown item - clients
      App_ID:[],
      open : false,  
      RadioLabels : [{name:'YES',value:'Y'},{name:'NO',value:'N'}],  //use for radio btn component
      selectedClient :'something',
      openDialog : false,  // use for confirm dialog open/close
      sttfDetails : [],
      ck_mark :[],
      // check_mark
      ck_0 : null,
      ck_1 : null,
      ck_2 : null,
      ck_3 : null,
      ck_4 : null,
      ck_5 : null,
      ck_6 : null,
      ck_7 : null,
      ck_8 : null,
      ck_9 : null,
      ck_10 : null,
      ck_11 : null,
      ck_12 : null,
        // check_mark
        chk_results : [],

        text_0 : '',
        text_1 : '',
        text_2 : '',
        text_3 : '',
        text_4 : '',
        text_5 : '',
        text_6 : '',
        text_7 : '',
        text_8 : '',
        text_9 : '',
        text_10 : '',
        text_11 : '',
        text_12 : '',
          // checklist_remark
       checklist_remarks : [],
      
    }
  }

  HandlerOnchangeDropDown =(event)=>{
    const getStffDetailByID_url = "/api/getStffDetailById/"
    axios.get(getStffDetailByID_url+event.target.value).then(response => {
      // this.setState({
      //   checklist_remarks: response.data
      // });
      
if(response.data.length > 0){
 
  response.data.map((val,index) => (
      this.setState({
        ['ck_'+index]: val.CHECKLIST_MARK?val.CHECKLIST_MARK:'N' ,
      })
  ))

      response.data.map((val,index) => (
      this.setState({
        ['text_'+index]: val.CHECKLIST_REMARK?val.CHECKLIST_REMARK:' ' ,
      
      })
      ))
    }
    else{

      for(var i = 0; i < 14; i++) {
        this.setState({
          ["ck_"+i]: null , ["text_"+i]: ' ' ,
          
        })
      }
     

    }
      
      this.setState({
        chk_results: response.data
      });
      this.setState({
        sttfDetails: response.data
      })
    this.setState({
      selectedClient: event.target.value
    })
       
  }).then (() => { 
    let checklist_remark = [
      { 'CHECKLIST_REMARK' : this.state.text_0},
      { 'CHECKLIST_REMARK' : this.state.text_1},
      { 'CHECKLIST_REMARK' : this.state.text_2},
      { 'CHECKLIST_REMARK' : this.state.text_3},
      { 'CHECKLIST_REMARK' : this.state.text_4},
      { 'CHECKLIST_REMARK' : this.state.text_5},
      { 'CHECKLIST_REMARK' : this.state.text_6},
      { 'CHECKLIST_REMARK' : this.state.text_7},
      { 'CHECKLIST_REMARK' : this.state.text_8},
      { 'CHECKLIST_REMARK' : this.state.text_9},
      { 'CHECKLIST_REMARK' : this.state.text_10},
      { 'CHECKLIST_REMARK' : this.state.text_11},
      { 'CHECKLIST_REMARK' : this.state.text_12},
   ]
      this.setState({ checklist_remarks : checklist_remark })
  })
 console.log(this.state)
  }

 
  componentDidMount () {



    const getStffDetailByID_url = "/api/getStffDetailById/"
    axios.get(getStffDetailByID_url+this.props.clientInfo.APP_ID).then(response => {
          this.setState({
        sttfDetails: response.data
        
      })

if(response.data.length > 0){
  this.setState({
    sttfDetails: response.data
    
  })
      this.setState({
        ck_0: response.data[0].CHECKLIST_MARK?response.data[0].CHECKLIST_MARK:'N' ,
        ck_1: response.data[1].CHECKLIST_MARK?response.data[1].CHECKLIST_MARK:'N',
        ck_2: response.data[2].CHECKLIST_MARK?response.data[2].CHECKLIST_MARK:'N',
        ck_3: response.data[3].CHECKLIST_MARK?response.data[3].CHECKLIST_MARK:'N',
        ck_4: response.data[4].CHECKLIST_MARK?response.data[4].CHECKLIST_MARK:'N',
        ck_5: response.data[5].CHECKLIST_MARK?response.data[5].CHECKLIST_MARK:'N',
        ck_6: response.data[6].CHECKLIST_MARK?response.data[6].CHECKLIST_MARK:'N',
        ck_7: response.data[7].CHECKLIST_MARK?response.data[7].CHECKLIST_MARK:'N',
        ck_8: response.data[8].CHECKLIST_MARK?response.data[8].CHECKLIST_MARK:'N',
        ck_9: response.data[9].CHECKLIST_MARK?response.data[9].CHECKLIST_MARK:'N',
        ck_10: response.data[10].CHECKLIST_MARK?response.data[10].CHECKLIST_MARK:'N',
        ck_11: response.data[11].CHECKLIST_MARK?response.data[11].CHECKLIST_MARK:'N',
        ck_12: response.data[12].CHECKLIST_MARK?response.data[12].CHECKLIST_MARK:'N'
      });

     this.setState({
        text_0: response.data[0].CHECKLIST_REMARK?response.data[0].CHECKLIST_REMARK:'' ,
        text_1: response.data[1].CHECKLIST_REMARK?response.data[1].CHECKLIST_REMARK:'' ,
        text_2: response.data[2].CHECKLIST_REMARK?response.data[2].CHECKLIST_REMARK:'' ,
        text_3: response.data[3].CHECKLIST_REMARK?response.data[3].CHECKLIST_REMARK:'' ,
        text_4: response.data[4].CHECKLIST_REMARK?response.data[4].CHECKLIST_REMARK:'' ,
        text_5: response.data[5].CHECKLIST_REMARK?response.data[5].CHECKLIST_REMARK:'' ,
        text_6: response.data[6].CHECKLIST_REMARK?response.data[6].CHECKLIST_REMARK:'' ,
        text_7: response.data[7].CHECKLIST_REMARK?response.data[7].CHECKLIST_REMARK:'' ,
        text_8: response.data[8].CHECKLIST_REMARK?response.data[8].CHECKLIST_REMARK:'' ,
        text_9: response.data[9].CHECKLIST_REMARK?response.data[9].CHECKLIST_REMARK:'' ,
        text_10: response.data[10].CHECKLIST_REMARK?response.data[10].CHECKLIST_REMARK:'' ,
        text_11: response.data[11].CHECKLIST_REMARK?response.data[11].CHECKLIST_REMARK:'' ,
        text_12: response.data[12].CHECKLIST_REMARK?response.data[12].CHECKLIST_REMARK:'' ,
      });
    }
    else{
      this.setState({
        ck_0: null ,
        ck_1: null,
        ck_2: null,
        ck_3:null,
        ck_4: null,
        ck_5: null,
        ck_6: null,
        ck_7: null,
        ck_8: null,
        ck_9: null,
        ck_10: null,
        ck_11: null,
        ck_12: null
      });

      this.setState({
        text_0: null ,
        text_1: null,
        text_2: null,
        text_3:null,
        text_4: null,
        text_5: null,
        text_6: null,
        text_7: null,
        text_8: null,
        text_9: null,
        text_10: null,
        text_1: null,
        text_12: null
      });

    }

  })


    

    axios.get('/api/getClientDetails').then(response => {
      this.setState({
        clientDetails: response.data
      })
    }).then( response=> {

      axios.get('/api/checkListsItems').then(response => {
        this.setState({
          checkLists: response.data
        })
      })

    this.setState({
      APP_ID: this.props.clientInfo.APP_ID
    
    })

    this.setState({
      selectedClient: this.props.clientInfo.APP_ID
    
    })
    const getStffDetailByID_url = "/api/getStffDetailById/"

    axios.get(getStffDetailByID_url+this.props.clientInfo.APP_ID).then(response => {
  
      this.setState({
        chk_results: response.data
      })
      this.setState({
        checklist_remarks: response.data
      })
    })
  })
  

 
  }

   handleDialogOpen = () => {
    this.setState({openDialog : true});
  };

 handleClose = (value) => {
    this.setState({openDialog:false});
  
    
  };

  textAreaHandler = (event)=>{

    this.setState({ [event.target.name] :event.target.value 

  }, () => {

    let checklist_remark = [
   { 'CHECKLIST_REMARK' : this.state.text_0},
   { 'CHECKLIST_REMARK' : this.state.text_1},
   { 'CHECKLIST_REMARK' : this.state.text_2},
   { 'CHECKLIST_REMARK' : this.state.text_3},
   { 'CHECKLIST_REMARK' : this.state.text_4},
   { 'CHECKLIST_REMARK' : this.state.text_5},
   { 'CHECKLIST_REMARK' : this.state.text_6},
   { 'CHECKLIST_REMARK' : this.state.text_7},
   { 'CHECKLIST_REMARK' : this.state.text_8},
   { 'CHECKLIST_REMARK' : this.state.text_9},
   { 'CHECKLIST_REMARK' : this.state.text_10},
   { 'CHECKLIST_REMARK' : this.state.text_11},
   { 'CHECKLIST_REMARK' : this.state.text_12},
]
   this.setState({ checklist_remarks : checklist_remark })
});

 
};


  radioBtnHandler = (event,index) => { 

    
    this.setState({ [event.target.name] :event.target.value
    }, () => {

       let checklist_marks = [
      { 'CHECKLIST_MARK' : this.state.ck_0},
      { 'CHECKLIST_MARK' : this.state.ck_1},
      { 'CHECKLIST_MARK' : this.state.ck_2},
      { 'CHECKLIST_MARK' : this.state.ck_3},
      { 'CHECKLIST_MARK' : this.state.ck_4},
      { 'CHECKLIST_MARK' : this.state.ck_5},
      { 'CHECKLIST_MARK' : this.state.ck_6},
      { 'CHECKLIST_MARK' : this.state.ck_7},
      { 'CHECKLIST_MARK' : this.state.ck_8},
      { 'CHECKLIST_MARK' : this.state.ck_9},
      { 'CHECKLIST_MARK' : this.state.ck_10},
      { 'CHECKLIST_MARK' : this.state.ck_11},
      { 'CHECKLIST_MARK' : this.state.ck_12},
]
      this.setState({ chk_results : checklist_marks })
  });
  }
    

  render(){
    const {classes} = this.props;
    const { checkLists } = this.state
    const { clientDetails } = this.state
    const { sttfDetails } = this.state
   
    return (
    <div>
     
      <div
        className={"relative flex flex-col min-w-0 break-words w-full  shadow-lg rounded  bg-white " }
      >
        <div className="rounded-t mb-0 px-4 py-3 border-0">
         
          <div className="flex flex-wrap items-center">
            <div className="relative w-full px-4 max-w-full flex-grow flex-1">
              <h3
                className={
                  "font-semibold text-lg  text-gray-800" 
                }
              >
             
             <div>
      <Button className={classes.button} onClick={() => this.setState({ open: true })}>
        select Clients
      
      </Button>
      <FormControl className={classes.formControl}>
        <InputLabel id="demo-controlled-open-select-label">Clients</InputLabel>
        <Select
          labelId="demo-controlled-open-select-label"
          id="demo-controlled-open-select"
           value={this.state.selectedClient}
          onChange={e => { this.props.onchange(e); this.HandlerOnchangeDropDown(e) }}
        >
          
          <MenuItem value="0">
            <em>Please select client</em>
          </MenuItem>
          {clientDetails.map(client => (
          <MenuItem  key={client.APP_ID.toString()}  value={client.APP_ID}>{client.COMP_PERSON_NAME} </MenuItem>
          ))}
        </Select>
      </FormControl>
    </div>
              </h3>
            </div>
          </div>
        </div>  
        <div className="block w-full overflow-x-auto">
          {/* Projects table */}
          {/* <table className={"items-center w-full bg-transparent border-collapse"+classes.tabley}> */}
          <table className={classes.table + "items-center w-full bg-transparent border-collapse"}>
            <thead>
              <tr>
                <th
                  className={
                    "px-6 align-middle border border-solid py-3 text-sm uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left  bg-gray-100 text-gray-600 border-gray-200" 
                  }
                >
                  CRITERIA
                </th>
                <th
                  className={
                    "px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left bg-gray-100 text-gray-600 border-gray-200" 

                  }
                >
                  YES/NO
                </th>
       

                <th
                  className={
                    "px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left bg-gray-100 text-gray-600 border-gray-200" 
                   }
                >
                  REMARKS
                </th>
             
              </tr>
            </thead>
            <tbody>
            {this.state.checkLists.map((checkList,index) => (
                <TableRow  key={checkList.CHECKLIST_INFO}>
                 <TableCell size="medium"  >
                 <Paper className={classes.paper}>
                 <Grid item xs>
                 <Grid container wrap="nowrap" spacing={2}>
                  {checkList.CHECKLIST_NAME}
                  </Grid>
                  </Grid>
                  </Paper>
                </TableCell>
                <TableCell className="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                <RadioBtn   
                               index ={index}
                               value={ this.state.chk_results.length > 0?this.state.chk_results[index].CHECKLIST_MARK:null}
                               id ={"ck_"+index} 
                               radioBtnHandler={this.radioBtnHandler}
                               labels={ this.state.RadioLabels}  
                              //  checkListId ={checkList.CHECKLIST_ID}  
                               />
                </TableCell>
                <TableCell className="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                  <div className="flex items-center">
                    {/* <span className="mr-2">60%</span> */}
                    <div className="relative w-full">
                
                       <div
                          style={{ width: "60%" }} className="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center">
                      <TextFields
                                id ={"text_"+index}  
                                index={index} 
                                label= {"Outlined"}
                                value={this.state.checklist_remarks.length > 0 ? this.state.checklist_remarks[index].CHECKLIST_REMARK:' '}
                                 textAreaHandler={this.textAreaHandler} />
                      </div>
                    </div>
                  </div>
                </TableCell>
              
              </TableRow >
            ))}
            
            </tbody>
          </table>
        </div>
   
                <div className={classes.root}>
      
      <Grid container spacing={3}>
        <Grid item xs>
          <div className={classes.paper}></div>
        </Grid>
        <Grid item xs={6}>
          <div className={classes.paper}> 
           <Button  className="w-135"  variant="contained" color="primary" onClick={this.handleDialogOpen} > Submit  </Button>
            </div>
        </Grid>
        <Grid item xs>
          <div className={classes.paper}></div>
        </Grid>
      </Grid>
    </div>
      
            </div>
            <ConfirmDialog
                       redirecToAppLists={this.props.redirecToAppLists} 
                       stffDetails ={this.state.sttfDetails}  
                       checklist_remarks={this.state.checklist_remarks}   
                       checklist_results = {this.state.chk_results}  
                       selectedValue={this.state.selectedValue} 
                       App_ID={this.props.clientInfo.APP_ID}
                       open={this.state.openDialog}
                      onClose={this.handleClose} />
      </div>
    
    
  );
}
  }



export default withStyles(useStyles)(CardTable)