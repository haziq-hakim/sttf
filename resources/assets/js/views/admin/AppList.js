import React, { Component} from "react";
import { withStyles } from '@material-ui/core/styles';
import Paper from '@material-ui/core/Paper';
import Table from '@material-ui/core/Table';
import TableBody from '@material-ui/core/TableBody';
import TableCell from '@material-ui/core/TableCell';
import TableContainer from '@material-ui/core/TableContainer';
import TableHead from '@material-ui/core/TableHead';
import TablePagination from '@material-ui/core/TablePagination';
import TableRow from '@material-ui/core/TableRow';
import Button from '@material-ui/core/Button';
import { ToastContainer, toast } from 'react-toastify';


function createData(name, code, population, size) {
  const density = population / size;
  return { name, code, population, size, density };
}


const useStyles = theme => ({
  root: {
    width: '100%',
    flexGrow: 1,
  
  },
  button: {
    display: 'block',
    marginTop: theme.spacing(2),
  },
  container: {
    maxHeight: 639,
  },

  fullpaper: {
    padding: theme.spacing(2),
    // margin: 'auto',
    // maxWidth: 200,
  },
});


class AppList extends Component {
  constructor(props) {
    super(props);

    this.state = {
    page : 0,
    rowsPerPage : 10,
   
    columns : [
    
      { id: 'REF_NO',
       label: 'REF_NO', 
       minWidth: 70 ,
       align: 'left'
      },
      {
        id: 'STATUS',
        label: 'STATUS',
        minWidth: 170,
        align: 'left',
        // format: (value) => value.toLocaleString('en-US'),
      },
      {
        id: 'CUST_NAME',
        label: 'CUST_NAME',
        minWidth: 70,
        align: 'left',
        // format: (value) => value.toLocaleString('en-US'),
      },
      {
        id: 'CUST_PERSON_NAME',
        label: 'CUST_PERSON_NAME',
        minWidth: 70,
        align: 'left',
        format: (value) => value.toFixed(2),
      },
      { id: 'CUST_SECTOR',
      label: 'CUST_SECTOR', 
      minWidth: 170 
     },
     { id: 'APP_ID',
     label: 'ACTION', 
     minWidth: 70 ,
     variant:'contained',
     color:'primary'
    }
    ],
    clientsInfo:[]
    };
  }

  handleChangePage=(event,newPage)=>{
    this.setState(
      {
        page:newPage
      });
  };



  componentDidMount () {
    axios.get('/api/getClientDetails').then(response => {
      this.setState({
        clientsInfo: response.data
      })
    })
  }

render(){
  const {classes} =this.props
  var pager = this.state.page;
  return (
    <div className="app-list-padding-top">
    <div className={classes.root}>
    <Paper className={classes.root}>
    <ToastContainer />
      <TableContainer className={classes.container}>
        <Table stickyHeader aria-label="sticky table">
          <TableHead>
            <TableRow>
              {this.state.columns.map((column) => (
                <TableCell
                  key={column.id}
                  align={column.align}
                  style={{ minWidth: column.minWidth }}
                >
                  {column.label}
                </TableCell>
              ))}
            </TableRow>
          </TableHead>
          <TableBody>
            {this.state.clientsInfo.slice(this.state.page * this.state.rowsPerPage, this.state.page * this.state.rowsPerPage + this.state.rowsPerPage).map((row) => {
              return (
                <TableRow hover role="checkbox" tabIndex={-1} key={row.App_ID}>
                  {this.state.columns.map((column) => {
                    const value = row[column.id];
                    return (
                      <TableCell key={column.id} align={column.align}>
                        {/* {column.format && typeof value === 'number' ? column.format(value) : value} */} 
                        {  column.id!=="APP_ID"? value: <Button variant={column.variant} color={column.color}  className={classes.button} onClick={this.props.editRowHandler.bind(this,row)}> EDIT </Button>}
                      </TableCell>
                    );
                  })}
                </TableRow>
               );
            })}
          </TableBody>
        </Table>
      </TableContainer>
      <TablePagination
        rowsPerPageOptions={[10, 25, 100]}
        component="div"
        count={this.state.clientsInfo.length}
        rowsPerPage={this.state.rowsPerPage}
        page={this.state.page}
         onChangePage={ this.handleChangePage}
        // onChangePage={(event) => this.setState({  page: this.state.page + 1 })  } // next page
        // onChangeRowsPerPage={handleChangeRowsPerPage}
        onChangeRowsPerPage={(event) => this.setState({ rowsPerPage: event.target.value , page : 0})}
      />
    </Paper>
    </div>
    </div>
  );
}
}

export default withStyles(useStyles)(AppList)
